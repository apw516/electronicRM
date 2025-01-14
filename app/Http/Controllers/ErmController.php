<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\mt_kode_header;
use App\Models\erm_order_header;
use App\Models\erm_order_detail;
use App\Models\assesmenawal;
use App\Models\assemenawalmedis;


class ErmController extends BaseController
{
    public function index()
    {
        return view('erm.index', [
            'menu' => 2,
            'title' => 'Semerusmart | E-RM',
        ]);
    }
    public function ambildatapasien()
    {
        $unit = auth()->user()->unit;
        $date = date('Y-m-d');
        $pasien_poli = DB::select('select a.kode_kunjungan,fc_nama_px(a.no_rm) as nama,a.no_rm,fc_umur(a.no_rm) as umur, fc_alamat4(a.no_rm) as alamat , fc_nama_unit1(a.kode_unit) as unit,a.tgl_masuk, a.kelas, a.counter, b.kode_kunjungan as kj
        ,fc_nama_unit1(a.ref_unit) as asalunit,(SELECT COUNT(idx) FROM erm_assesmen_keperawatan_rajal WHERE no_rm = a.no_rm ) AS data_erm from ts_kunjungan a left outer join erm_assesmen_keperawatan_rajal b on b.kode_kunjungan = a.kode_kunjungan where a.kode_unit = ? and a.status_kunjungan = ? and date(a.tgl_masuk) = ?', [$unit, 1, $date]);
        return view('erm.datapasien', [
            'pasien' => $pasien_poli
        ]);
    }
    public function cariunit(Request $request)
    {
        $result = DB::table('mt_unit')->where('nama_unit', 'LIKE', '%' . $request['term'] . '%')->get();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nama_unit,
                    'kode' => $row->kode_unit,
                );
            echo json_encode($arr_result);
        }
    }
    public function tampilcppt(Request $request)
    {
        return view('erm.cppt', [
            'ass_kep' =>  DB::select('SELECT *,b.kode_kunjungan AS kunjungan_2 ,a.sumber_data AS sumber_data_askep,b.sumber_data AS sumber_data_asmed, b.`keluhan_utama`AS keluhan_utamadokter, fc_nama_dpjp(b.dpjp) as nama_dokter, a.`keluhan_utama`AS keluhan_utamaperawat FROM `erm_assesmen_keperawatan_rajal` a LEFT OUTER JOIN erm_assesmen_awal_medis_rajal b ON b.no_rm = a.no_rm WHERE a.no_rm = ?', [$request->nomorrm])
        ]);
    }
    public function tampilresume(Request $request)
    {
        $nama  = $request->nama;
        $nomorrm  = $request->nomorrm;
        $alamat = $request->alamat;
        $kodekunjungan = $request->kodekunjungan;
        if(auth()->user()->hak_akses == 2){

        $ass_kep = DB::select('SELECT * FROM erm_assesmen_keperawatan_rajal where no_rm =? and kode_kunjungan = ? ORDER BY tglwaktu_assesmen desc', [$request->nomorrm, $kodekunjungan]);        
        }else{
            $ass_kep = DB::select('SELECT * FROM erm_assesmen_awal_medis_rajal where no_rm =? and kode_kunjungan = ? ORDER BY tglwaktu_assesmen desc', [$request->nomorrm, $kodekunjungan]);        
        }
        $ORDER = DB::select('SELECT *,fc_nama_unit1(kode_unit) as nama_unit FROM ts_layanan_header_order where kode_kunjungan = ? ORDER BY tgl_entry desc', [$kodekunjungan]);
        $ORDERdetail = DB::select('SELECT a.id,c.NAMA_TARIF,total_tarif,a.total_layanan,jumlah_layanan,diskon_layanan,diskon_dokter,a.kode_layanan_header  FROM ts_layanan_detail_order a INNER JOIN mt_tarif_detail b ON a.kode_tarif_detail = b.KODE_TARIF_DETAIL INNER JOIN mt_tarif_header c ON  b.KODE_TARIF_HEADER = c.KODE_TARIF_HEADER
        INNER JOIN ts_layanan_header_order d ON a.row_id_header = d.id where d.kode_kunjungan = ? ORDER BY d.tgl_entry desc', [$kodekunjungan]);
        $CEKORDER = count($ORDER);
        $unit = $request->unit;
        $counter = $request->counter;
        $umur = $request->umur;
        $tglmasuk = $request->tglmasuk;
        $date = date('d-m-Y');
        return view('erm.resume', [
            'now' => Carbon::parse(date('Y-m-d'))->locale('id')->dayName . ', ' . $date,
            'nama' =>  $nama,
            'rm' =>  $nomorrm,
            'alamat' => $alamat,
            'tglmasuk' => $tglmasuk,
            'umur' => $umur,
            'counter' => $counter,
            'unit' => $unit,
            'cek_form' => count($ass_kep),
            'pasien' => DB::select('SELECT * FROM mt_pasien WHERE no_rm = ?', [$request->nomorrm]),
            'riwayat_kunjungan' => DB::select("CALL SP_RIWAYAT_KUNJUNGAN_PX('$nomorrm')"),
            'order' => $ORDER,
            'cek_order' => $CEKORDER,
            'orderdetail' => $ORDERdetail
        ]);
    }
    public function tampilriwayat(Request $request)
    {
        $periode = DB::select('SELECT DISTINCT DATE(tgl_masuk) as tgl_masuk from ts_kunjungan where no_rm = ? ORDER BY tgl_masuk desc', [$request->nomorrm]);
        $COUNTER = DB::select('SELECT DISTINCT counter from ts_kunjungan where no_rm = ?', [$request->nomorrm]);
        $all_licencies = collect();
        foreach ($COUNTER as $key => $column) {
            $layanan = DB::select("CALL RINCIAN_BIAYA_FINAL('$request->nomorrm','$column->counter','1','1')");
            $all_licencies = $all_licencies->merge($layanan);
        }
        $periode = DB::select('SELECT DATE(ts_kunjungan.tgl_masuk) AS tanggal_masuk FROM ts_kunjungan 
        LEFT OUTER JOIN ts_layanan_header ON ts_kunjungan.kode_kunjungan = ts_layanan_header.kode_kunjungan
        LEFT OUTER JOIN ts_layanan_detail ON ts_layanan_header.id = ts_layanan_detail.row_id_header
        WHERE no_rm = ? GROUP BY ts_kunjungan.tgl_masuk DESC', [$request->nomorrm]);
        // dd($periode);dhghguhghfoi                  byu  bgygyygygygbhhgyvv    bnnjyasdfjdhjfhujfhfheufhuiewhfuiewhfio
        return view('erm.riwayatpelayanan', [
            'kunjungan' => $all_licencies,
            'periode' => $periode,
        ]);
    }

    public function formpasien(request $request)
    {
        $nomorrm = $request->rm;
        $nama  = $request->nama;
        $alamat = $request->alamat;
        $kodekunjungan = $request->kodekunjungan;
        $unit = $request->unit;
        $unit_log = auth()->user()->unit;
        $counter = $request->counter;
        $umur = $request->umur;
        $tglmasuk = $request->tglmasuk;
        $kelas = $request->kelas;
        return view('erm.pasienterpilih', [
            'rm' => $nomorrm,
            'kelas' => $kelas,
            'nama' =>  $nama,
            'alamat' => $alamat,
            'tglmasuk' => $tglmasuk,
            'kodekunjungan' => $kodekunjungan,
            'umur' => $umur,
            'counter' => $counter,
            'unit' => $unit,
        ]);
    }
    public function pilihform(request $request)
    {
        $id = $request->id;
        $tglmasuk = $request->tglmasuk;
        $nomorrm = $request->nomorrm;
        $nama = $request->nama;
        $unit = $request->unit;
        $alamat = $request->alamat;
        $umur = $request->umur;
        $periode = DB::select('SELECT DISTINCT DATE(tgl_masuk) as tgl_masuk from ts_kunjungan where no_rm = ? ORDER BY tgl_masuk desc', [$nomorrm]);
        $counter = DB::select('SELECT DISTINCT counter from ts_kunjungan where no_rm = ?', [$nomorrm]);

        if ($id == 1) {
            return view('erm.form1', [
                'now' => Carbon::now()->timezone('Asia/Jakarta'),
                'pasien' => DB::select('SELECT * from mt_pasien where no_rm = ?', [$nomorrm]),
                'tglmasuk' => $tglmasuk
            ]);
        } else if ($id == 2) {
            return view('erm.form2', [
                'now' => Carbon::now()->timezone('Asia/Jakarta')
            ]);
        } else if ($id == 3) {
            return view('erm.anakbaru', [
                'now' => Carbon::now()->timezone('Asia/Jakarta'),
                'tglmasuk' => $tglmasuk
            ]);
        } else if ($id == 'radiologi') {
            return view('erm.formradiologi', [
                'rm' => $nomorrm,
                'tglmasuk' => $tglmasuk,
                'periode' => $periode,
                'counter' => $counter,
                'nama' => $nama,
                'unit'  => $unit,
                'alamat' => $alamat,
                'umur' => $umur,
                'now' => Carbon::now()->timezone('Asia/Jakarta')
            ]);
        } else if ($id == 'laboratorium') {
            return view('erm.formlaboratorium', [
                'rm' => $nomorrm,
                'tglmasuk' => $tglmasuk,
                'periode' => $periode,
                'counter' => $counter,
                'nama' => $nama,
                'unit'  => $unit,
                'alamat' => $alamat,
                'umur' => $umur,
                'now' => Carbon::now()->timezone('Asia/Jakarta')
            ]);
        }
    }
    public function editform(Request $request)
    {
        if(auth()->user()->hak_akses == 2){
            return view('erm.editform1', [
                'now' => Carbon::now()->timezone('Asia/Jakarta'),
                'pasien' => DB::select('SELECT * from mt_pasien where no_rm = ?', [$request->nomorrm]),
                'tglmasuk' => $request->tglmasuk,
                'data' => DB::select('SELECT * from erm_assesmen_keperawatan_rajal where kode_kunjungan = ?', [$request->kodekunjungan])
            ]);
        }else{
            return view('erm.editformdokter', [
                'now' => Carbon::now()->timezone('Asia/Jakarta'),
                'pasien' => DB::select('SELECT * from mt_pasien where no_rm = ?', [$request->nomorrm]),
                'tglmasuk' => $request->tglmasuk,
                'data' => DB::select('SELECT * from erm_assesmen_keperawatan_rajal where kode_kunjungan = ?', [$request->kodekunjungan])
            ]);
        }
    }
    public function carilayanan(request $request)
    {
        $layanan = $request->layanan;
        $unit = auth()->user()->unit;
        $layanan = DB::select("CALL SP_PANGGIL_TARIF_TINDAKAN_RS('2','$layanan','$unit')");
        return view('erm.tabellayanan', [
            'layanan' => $layanan
        ]);
    }
    public function simpanrm02(request $request)
    {

        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => $index
                ];
                echo json_encode($data);
                die;
            }
        }
        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan'],
            'tglwaktu_assesmen' => $dataSet['tanggalmasuk'],
            'no_rm' => $dataSet['rm'],
            'sumber_data' => $dataSet['sumberdata_pasienbaru'],
            'keluhan_utama' => $dataSet['keluhanutama_pasienbaru'],
            'ttv_tekanan_darah' => $dataSet['tekanandarah_pasienbaru'],
            'ttv_freq_napas' => $dataSet['frekuensinapas_pasienbaru'],
            'ttv_freq_nadi' => $dataSet['frekuensinadi_pasienbaru'],
            'ttv_suhu' => $dataSet['suhu_pasienbaru'],
            'riwayat_Psikologis' => $dataSet['RP_pasienbaru'],
            'stafungsi_Alatbantu' => $dataSet['alatbantu_pasienbaru'],
            'stafungsi_cacattubuh' => $dataSet['cacat_pasienbaru'],
            'keterangan_cacat_tubuh' => $dataSet['namacacatubuh'],
            'assesmen_nyeri' => $dataSet['nyeri_pasienbaru'],
            'keterangan_skala_nyeri' => $dataSet['skalenyeripasien'],
            'assesmen_resikojatuh' => $dataSet['resikojatuh_pasienbaru'],
            'Skri_gizi_1' => $dataSet['skrininggizi_pasienbaru'],
            'skor_penurunan_berat_badan' => $dataSet['skorskrininggizi'],
            'Skri_gizi_2' => $dataSet['beratskrininggizi_pasienbaru'],
            'Skri_gizi_3' => $dataSet['asupanmkanan_pasienbaru'],
            'Skri_gizi_4' => $dataSet['diagnosakhusus_pasienbaru'],
            'keterangan_diagnosa_khusus' => $dataSet['penyakitlainpasien'],
            'malnutrisi_pasien' => $dataSet['malnutrisi_pasienbaru'],
            'skor_asupan_makanan' => $dataSet['skorasupanmkanan_pasienbaru'],
            'skor_total_skr_gizi' => $dataSet['totalskorgizi'],
            'tanggal_pengkajian_lanjut_gizi' => $dataSet['tglpengkajianlanjut'],
            'diag_perawat' => $dataSet['diagnosakeperawatan'],
            'tindakan_perawat' => $dataSet['tindakankeperawatan'],
            'rencana_perawat' => $dataSet['rencanakeperawatan'],
            'evaluasi_perawat' => $dataSet['evaluasikeperawatan'],
            'tgl_selesai' => Carbon::now()->timezone('Asia/Jakarta'),
            'id_perawat' => $dataSet['id_perawat'],
            'ttd_perawat' => $dataSet['signature'],
            'kode_unit' => auth()->user()->unit
        ];
        $now = date('Y-m-d');
        $cek = DB::select('SELECT * from erm_assesmen_keperawatan_rajal WHERE date(tglwaktu_assesmen) = ? AND no_rm = ? AND kode_unit = ?', [$now, $dataSet['rm'], auth()->user()->unit]);
        if (count($cek) > 0) {
            assesmenawal::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);
        } else {
            $erm_assesmen = assesmenawal::create($data);
        }

        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];

        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
    }
    public function simpanrm02edit(request $request)
    {

        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => $index
                ];
                echo json_encode($data);
                die;
            }
        }
        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan'],
            'tglwaktu_assesmen' => $dataSet['tanggalmasuk'],
            'no_rm' => $dataSet['rm'],
            'sumber_data' => $dataSet['editsumberdata_pasienbaru'],
            'keluhan_utama' => $dataSet['editkeluhanutama_pasienbaru'],
            'ttv_tekanan_darah' => $dataSet['edittekanandarah_pasienbaru'],
            'ttv_freq_napas' => $dataSet['editfrekuensinapas_pasienbaru'],
            'ttv_freq_nadi' => $dataSet['editfrekuensinadi_pasienbaru'],
            'ttv_suhu' => $dataSet['editsuhu_pasienbaru'],
            'riwayat_Psikologis' => $dataSet['editRP_pasienbaru'],
            'stafungsi_Alatbantu' => $dataSet['editalatbantu_pasienbaru'],
            'stafungsi_cacattubuh' => $dataSet['editcacat_pasienbaru'],
            'keterangan_cacat_tubuh' => $dataSet['editnamacacatubuh'],
            'assesmen_nyeri' => $dataSet['editnyeri_pasienbaru'],
            'keterangan_skala_nyeri' => $dataSet['editskalenyeripasien'],
            'assesmen_resikojatuh' => $dataSet['editresikojatuh_pasienbaru'],
            'Skri_gizi_1' => $dataSet['editskrininggizi_pasienbaru'],
            'skor_penurunan_berat_badan' => $dataSet['editskorskrininggizi'],
            'Skri_gizi_2' => $dataSet['editberatskrininggizi_pasienbaru'],
            'Skri_gizi_3' => $dataSet['editasupanmkanan_pasienbaru'],
            'Skri_gizi_4' => $dataSet['editdiagnosakhusus_pasienbaru'],
            'keterangan_diagnosa_khusus' => $dataSet['editpenyakitlainpasien'],
            'malnutrisi_pasien' => $dataSet['editmalnutrisi_pasienbaru'],
            'skor_asupan_makanan' => $dataSet['editskorasupanmkanan_pasienbaru'],
            'skor_total_skr_gizi' => $dataSet['edittotalskorgizi'],
            'tanggal_pengkajian_lanjut_gizi' => $dataSet['edittglpengkajianlanjut'],
            'diag_perawat' => $dataSet['editdiagnosakeperawatan'],
            'tindakan_perawat' => $dataSet['edittindakankeperawatan'],
            'rencana_perawat' => $dataSet['editrencanakeperawatan'],
            'evaluasi_perawat' => $dataSet['editevaluasikeperawatan'],
            'tgl_selesai' => Carbon::now()->timezone('Asia/Jakarta'),
            'id_perawat' => $dataSet['editid_perawat'],
            'ttd_perawat' => $dataSet['editsignature'],
            'kode_unit' => auth()->user()->unit
        ];
        $now = date('Y-m-d');
        assesmenawal::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);


        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];

        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
    }
    public function simpanrm02lama(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => $index . 'Belum diisi.....'
                ];
                echo json_encode($data);
                die;
            }
        }
        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan'],
            'tglwaktu_assesmen' => $dataSet['tgldanjamkunjungan_pasienbaru'],
            'no_rm' => $dataSet['rm'],
            'sumber_data' => $dataSet['sumberdata_pasienlama'],
            'keluhan_utama' => $dataSet['keluhanutama_pasienlama'],
            'ttv_tekanan_darah' => $dataSet['tekanandarah_pasienlama'],
            'ttv_freq_napas' => $dataSet['frekuensinapas_pasienlama'],
            'ttv_freq_nadi' => $dataSet['frekuensinadi_pasienlama'],
            'ttv_suhu' => $dataSet['suhu_pasienlama'],
            'riwayat_psikologis' => $dataSet['RP_pasienlama'],
            'stafungsi_Alatbantu' => $dataSet['alatbantu_pasienlama'],
            'stafungsi_cacattubuh' => $dataSet['cacat_pasienlama'],
            'assesmen_nyeri' => $dataSet['skalanyeripasienlama'],
            'assesmen_resikojatuh' => $dataSet['resikojatuh_pasienlama'],
            'Skri_gizi_1' => $dataSet['skrininggizi_pasienlama1'],
            'Skri_gizi_2' => $dataSet['skrininggizi_pasienlama2'],
            'Skri_gizi_3' => $dataSet['skrininggizi_pasienlama3'],
            'dia_perawat' => $dataSet['diagnosakeperawatan'],
            'tindakan_perawat' => $dataSet['tindakankeperawatan'],
            'rencana_perawat' => $dataSet['rencanakeperawatan'],
            'evaluasi_perawat' => $dataSet['evaluasikeperawatan'],
            'tgl_selesai' => $dataSet['tanggal_assesmen'],
            'id_perawat' => $dataSet['id_perawat'],
            'ttd_perawat' => $dataSet['signature'],
        ];
        $now = date('Y-m-d');
        $cek = DB::select('SELECT * from erm_assesmen_keperawatan_rajal WHERE date(tglwaktu_assesmen) = ? AND no_rm = ? AND kode_unit = ?', [$now, $dataSet['rm'], auth()->user()->unit]);
        if (count($cek) > 0) {
            assesmenawal::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);
        } else {
            $erm_assesmen = assesmenawal::create($data);
        }

        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
    }
    public function simpanrmanak(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($value == '') {
                $data = [
                    'kode' => 500,
                    'message' => $index . 'Belum diisi.....'
                ];
                echo json_encode($data);
                die;
            }
        }
        $data = [
            'tglwaktu_assesmen' => $dataSet['tgldanjamkunjungan_pasienanak'],
            'kode_kunjungan' => $dataSet['kodekunjungan'],
            'no_rm' => $dataSet['rm'],
            'keluhan_utama' => $dataSet['keluhanutama_pasienanak'],
            'ttv_tekanan_darah' => $dataSet['tekanandarah_pasienanak'],
            'ttv_freq_napas' => $dataSet['frekuensinapas_pasienanak'],
            'ttv_freq_nadi' => $dataSet['frekuensinadi_pasienanak'],
            'ttv_suhu' => $dataSet['suhu_pasienanak'],
            'stafungsi_Alatbantu' => $dataSet['alatbantu_pasienanak'],
            'stafungsi_cacattubuh' => $dataSet['cacat_pasienanak'],
            'assesmen_nyeri' => $dataSet['skalanyeripasienanak'],
            'assesmen_nyeri_mtd_wbfc_face' => $dataSet['wajah_pasienanak'],
            'assesmen_nyeri_mtd_wbfc_leg' => $dataSet['kaki_pasienanak'],
            'assesmen_nyeri_mtd_wbfc_act' => $dataSet['activity_pasienanak'],
            'assesmen_nyeri_mtd_wbfc_cry' => $dataSet['cry_pasienanak'],
            'assesmen_nyeri_mtd_wbfc_cons' => $dataSet['consolabity_pasienanak'],
            'assesmen_nyeri_mtd_nips_Eks_face' => $dataSet['ekspresi_pasienanak'],
            'assesmen_nyeri_mtd_nips_cry' => $dataSet['nangis_pasienanak'],
            'assesmen_nyeri_mtd_nips_polanapas' => $dataSet['pola_pasienanak'],
            'assesmen_nyeri_mtd_nips_lengan' => $dataSet['l_pasienanak'],
            'assesmen_nyeri_mtd_nips_kaki' => $dataSet['k_pasienanak'],
            'assesmen_nyeri_mtd_nips_keadaanterangsang' => $dataSet['terangsang_pasienanak'],
            'assesmen_nyeri_mtd_hd_umur' => $dataSet['umur_pasienanak'],
            'assesmen_nyeri_mtd_hd_jeniskelamin' => $dataSet['jk_pasienanak'],
            'assesmen_nyeri_mtd_hd_diagnosis' => $dataSet['diagnosis_pasienanak'],
            'assesmen_nyeri_mtd_hd_gangkognitif' => $dataSet['kognitif_pasienanak'],
            'assesmen_nyeri_mtd_hd_faklingkungan' => $dataSet['fl_pasienanak'],
            'assesmen_nyeri_mtd_hd_responobat' => $dataSet['rsp_pasienanak'],
            'assesmen_nyeri_mtd_hd_pengguaanobat' => $dataSet['obat_pasienanak'],
            'tgl_selesai' => $dataSet['tanggal_assesmen'],
            'id_perawat' => $dataSet['id_perawat'],
            'ttd_perawat' => $dataSet['signature'],
        ];
        $now = date('Y-m-d');
        $cek = DB::select('SELECT * from erm_assesmen_keperawatan_rajal WHERE date(tglwaktu_assesmen) = ? AND no_rm = ? AND kode_unit = ?', [$now, $dataSet['rm'], auth()->user()->unit]);
        if (count($cek) > 0) {
            assesmenawal::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);
        } else {
            $erm_assesmen = assesmenawal::create($data);
        }

        $data = [
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
    }
    public function  simpanformlab(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $namapasien = $request->nama;
        $unit = $request->unit;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $new_array = array();
        $keterangan = array();
        $date = Carbon::now()->timezone('Asia/Jakarta');
        $now = $date->toDateTimeString();
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            // $dataSet[$index] = $value;
            if ($index != 'rm' && $index != 'dokter' && $index != 'tglmasuk' && $index != 'unit' && $index != 'nama'  && $index != 'umur'  && $index != 'jk'  && $index != 'alamat') {
                $new_array[] = array('order' => $value);
            }
        }
        $new_array2 = array();
        foreach ($new_array as $d) {
            $dataa = [
                'kodekunjungan' => $kodekunjungan,
                'diagnosa' => $request->diagnosa,
                'rm' => $rm,
                'nama' => $namapasien,
                'tglmasuk' => $tglmasuk,
                'unit' => $unit,
                'order' => $d['order']
            ];
            $new_array2[] = array('order' => $dataa);
        }
        if (count($new_array2) == 0) {
            $data = [
                'kode' => 500,
                'message' => 'Tidak ada layanan yang dipilih ...'
            ];
            echo json_encode($data);
            die;
        } else {
            //insert order header
            $kode_h = 'ORL';
            $id_header = $this->createOrderHeader($kode_h);
            $save_header = [
                'kode_header' => $id_header,
                'tgl_header' => $now
            ];
            mt_kode_header::create($save_header);
            $total = count($new_array2);
            $data_header = [
                'tgl_input' => $now,
                'kode_order_header' => $id_header,
                'tujuan_unit' => '3003',
                'asal_unit' => auth()->user()->unit . ' | ' . $unit . ' | ' . $request->kelas,
                'no_rm' => $rm,
                'kode_kunjungan' => $kodekunjungan,
                'diagnosa' => $request->diagnosa,
                'Dokter_pengirim' => auth()->user()->kode_dpjp,
                'jml_layanan' => $total,
                'pic1' => auth()->user()->kode_dpjp,
            ];
            $hed = erm_order_header::create($data_header);
            foreach ($new_array2 as $da) {
                $data =  $da['order']['order'];
                $whatIWant = str_replace(' ', '', substr($data, strpos($data, "|") + 1));
                $data_detail = [
                    'id_orderhed' => $hed->id,
                    'id_array' => $whatIWant
                ];
                erm_order_detail::create($data_detail);
            }
            $data = [
                'kode' => 200,
                'message' => 'Layanan berhasil dikirim ...'
            ];
            echo json_encode($data);
            die;
        }
    }
    public function simpanradiologi(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        $kodekunjungan = $request->kodekunjungan;
        $rm = $request->rm;
        $tglmasuk = $request->tglmasuk;
        $namapasien = $request->nama;
        $unit = $request->unit;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $new_array = array();
        $keterangan = array();
        $date = Carbon::now()->timezone('Asia/Jakarta');
        $now = $date->toDateTimeString();
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            // $dataSet[$index] = $value;
            if ($index != 'rm' && $index != 'dokter' && $index != 'tglmasuk' && $index != 'unit' && $index != 'nama'  && $index != 'umur'  && $index != 'jk'  && $index != 'alamat') {
                if ($index == 'ketereangan_ekstremitas' || $index == 'keterangan_sendi' || $index == 'keterangan_rontgen' || $index == 'keterangan_foto_kontras' || $index == 'keterangan_ct_non' || $index == 'keterangan_ct_kon' || $index == 'keterangan_musc' && $index == 'keterangan_usg') {
                    $keterangan[] = array($index => $value);
                } else {
                    $new_array[] = array('order' => $value);
                }
            }
        }
        $new_array2 = array();
        foreach ($new_array as $d) {
            if ($d['order'] != 'Tidak ada' && $d['order'] != '' && $d['order'] != 'tidak ada') {
                $dataa = [
                    'kodekunjungan' => $kodekunjungan,
                    'diagnosa' => $request->diagnosa,
                    'rm' => $rm,
                    'nama' => $namapasien,
                    'tglmasuk' => $tglmasuk,
                    'unit' => $unit,
                    'keterangan1' => $keterangan[0]['ketereangan_ekstremitas'],
                    'keterangan2' => $keterangan[1]['keterangan_sendi'],
                    'keterangan3' => $keterangan[2]['keterangan_rontgen'],
                    'keterangan4' => $keterangan[3]['keterangan_foto_kontras'],
                    'keterangan5' => $keterangan[4]['keterangan_ct_non'],
                    'keterangan6' => $keterangan[5]['keterangan_ct_kon'],
                    'order' => $d['order']
                ];
                $new_array2[] = array('order' => $dataa);
            }
        }
        if (count($new_array2) == 0) {
            $data = [
                'kode' => 500,
                'message' => 'Tidak ada layanan yang dipilih ...'
            ];
            echo json_encode($data);
            die;
        } else {
            //insert order header
            $kode_h = 'ORR';
            $id_header = $this->createOrderHeader($kode_h);
            $save_header = [
                'kode_header' => $id_header,
                'tgl_header' => $now
            ];
            mt_kode_header::create($save_header);
            $total = count($new_array2);
            $data_header = [
                'tgl_input' => $now,
                'kode_order_header' => $id_header,
                'tujuan_unit' => '3003',
                'asal_unit' => auth()->user()->unit . ' | ' . $unit . ' | ' . $request->kelas,
                'no_rm' => $rm,
                'kode_kunjungan' => $kodekunjungan,
                'diagnosa' => $request->diagnosa,
                'Dokter_pengirim' => auth()->user()->kode_dpjp,
                'jml_layanan' => $total,
                'pic1' => auth()->user()->kode_dpjp,
            ];
            $hed = erm_order_header::create($data_header);
            foreach ($new_array2 as $da) {
                $data =  $da['order']['order'];
                $whatIWant = str_replace(' ', '', substr($data, strpos($data, "|") + 1));
                $data_detail = [
                    'id_orderhed' => $hed->id,
                    'id_array' => $whatIWant
                ];
                erm_order_detail::create($data_detail);
            }
            $data = [
                'kode' => 200,
                'message' => 'Layanan berhasil dikirim ...'
            ];
            echo json_encode($data);
            die;
        }
    }
    public function createOrderHeader($unit)
    {
        $q = DB::select('SELECT id,kode_header,RIGHT(kode_header,6) AS kd_max  FROM mt_kode_order_header 
        WHERE DATE(tgl_header) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $unit . date('ymd') . $kd;
    }
    public function simpanlayanan(Request $request)
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        //ts_layanan_header
        $kodekunjungan = $request->kodekunjungan;
        $kunjungan = DB::select('SELECT * from ts_kunjungan where kode_kunjungan = ?', [$kodekunjungan]);
        $penjamin = $kunjungan[0]->kode_penjamin;

        $data = json_decode($_POST['data'], true);
        $cek = count($data);
        if ($cek <= 2) {
            $data = [
                'kode' => 500,
                'message' => 'Tidak ada Layanan yang dipilih ...'
            ];
            echo json_encode($data);
            die;
        }

        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'cyto') {
                $arrayindex[] = $dataSet;
            }
        }
        try {
            if ($request->jenisform == 1) {
                // dd('simpanlayananheader');
            } else {
                //insert order header        
                if ($request->unitujuan == '3003') {
                    $kode_h = 'ORR';
                } else if ($request->unitujuan == '3002') {
                    $kode_h = 'ORL';
                } else if ($request->unitujuan == '3020') {
                    $kode_h = 'ORP';
                } else if ($request->unitujuan == '3012') {
                    $kode_h = 'ORE';
                } else if ($request->unitujuan == '3011') {
                    $kode_h = 'ORB';
                }
                $id_header = $this->createOrderHeader($kode_h);
                $save_header = [
                    'kode_header' => $id_header,
                    'tgl_header' => date('Y-m-d')
                ];
                $header = mt_kode_header::create($save_header);
                // $total = count($new_array2);
                $data_layanan_header = [
                    'kode_layanan_header' => $id_header,
                    'tgl_entry' => $now,
                    'kode_kunjungan' => $kodekunjungan,
                    'status_layanan' => 3,
                    'kode_unit' => $request->unitujuan,
                    'kode_tipe_transaksi' => 2,
                    'kode_penjaminx' => $penjamin,
                    'dok_kirim' => auth()->user()->kode_dpjp,
                    'unit_pengirim' => auth()->user()->unit,
                    'pic' => auth()->user()->kode_dpjp,
                ];
                $hed = erm_order_header::create($data_layanan_header);
                foreach ($arrayindex as $arr) {
                    if ($penjamin == 'P01') {
                        $save_detail = [
                            'id_layanan_detail' => 'belum dibikin',
                            'kode_layanan_header' => $id_header,
                            'kode_tarif_detail' => $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'] * $arr['qty'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'kode_dokter1' => $request->dokterpemeriksa,
                            'tgl_layanan_detail' => $now,
                            'tagihan_pribadi' => $arr['tarif'] * $arr['qty'],
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $hed['id']
                        ];
                    } else {
                        $save_detail = [
                            'id_layanan_detail' => 'belum dibikin',
                            'kode_layanan_header' => $id_header,
                            'kode_tarif_detail' => $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'] * $arr['qty'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'kode_dokter1' => $request->dokterpemeriksa,
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $arr['tarif'] * $arr['qty'],
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $hed['id']
                        ];
                    }
                    erm_order_detail::create($save_detail);
                }
            }
            $back = [
                'kode' => 200,
                'message' => ''
            ];
            echo json_encode($back);
            die;
        } catch (\Exception $e) {
            $back = [
                'kode' => 500,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
    }
    public function tampilresume_lama(Request $request)
    {
        $kode = $request->kode;
        $asskep = DB::select('SELECT * from erm_assesmen_keperawatan_rajal where kode_kunjungan = ?', [$kode]);
        $assmed = DB::select('SELECT * from erm_assesmen_awal_medis_rajal where kode_kunjungan = ?', [$kode]);
        $ORDER = DB::select('SELECT *,fc_nama_unit1(kode_unit) as nama_unit FROM ts_layanan_header_order where kode_kunjungan = ? ORDER BY tgl_entry desc', [$kode]);
        $ORDERdetail = DB::select('SELECT a.id,c.NAMA_TARIF,total_tarif,a.total_layanan,jumlah_layanan,diskon_layanan,diskon_dokter,a.kode_layanan_header  FROM ts_layanan_detail_order a INNER JOIN mt_tarif_detail b ON a.kode_tarif_detail = b.KODE_TARIF_DETAIL INNER JOIN mt_tarif_header c ON  b.KODE_TARIF_HEADER = c.KODE_TARIF_HEADER
        INNER JOIN ts_layanan_header_order d ON a.row_id_header = d.id where d.kode_kunjungan = ? ORDER BY d.tgl_entry desc', [$kode]);
        $CEKORDER = count($ORDER);
        return view('erm.riwayat_resume', [
            'cek_asskep' => count($asskep),
            'data' => $asskep,
            'cek_assmed' => count($assmed),
            'data_2' => $assmed,
            'cekorder' => $CEKORDER,
            'order' => $ORDER,
            'orderdetail' => $ORDERdetail
        ]);
    }
}
