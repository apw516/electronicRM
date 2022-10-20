<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\assesmenawal;
use App\Models\assesmenawal_med;
class Erm2Controller extends BaseController
{
    public function index()
    {
        $unit = auth()->user()->unit;
        $now = date('Y-m-d');
        $pasien_poli = DB::select('select a.kode_kunjungan,
        fc_nama_px(a.no_rm) as nama,a.no_rm,fc_umur(a.no_rm) as umur, 
        fc_alamat4(a.no_rm) as alamat , fc_nama_unit1(a.kode_unit) as unit,
        a.tgl_masuk, a.kelas, a.counter, 
        b.ttv_tekanan_darah as tekanan_darah,
        fc_nama_unit1(a.ref_unit) as asalunit,
        c.kode_kunjungan as kjdok,
        b.kode_kunjungan as kjper
        FROM ts_kunjungan a
        LEFT OUTER JOIN erm_assesmen_keperawatan_rajal b ON b.kode_kunjungan= a.kode_kunjungan 
        LEFT OUTER JOIN erm_assesmen_awal_medis_rajal c ON c.kode_kunjungan = a.kode_kunjungan
        WHERE a.kode_unit=? AND DATE(a.tgl_masuk)=? AND a.status_kunjungan=?' , [$unit, $now, 1]);
        return view('erm2.index', [
            'menu' => 2,
            'title' => 'Semerusmart | E-RM',
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
            'ass_kep' =>  DB::select('SELECT *, b.`keluhan_utama`AS keluhan_utamadokter, fc_nama_dpjp(b.dpjp) as nama_dokter,  a.`keluhan_utama`AS keluhan_utamaperawat FROM `erm_assesmen_keperawatan_rajal` a
            LEFT OUTER JOIN erm_assesmen_awal_medis_rajal b ON b.no_rm = a.no_rm WHERE a.no_rm = ?',[$request->nomorrm])
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
        $periode = DB::select('SELECT DISTINCT DATE(tgl_masuk) as tgl_masuk from ts_kunjungan where no_rm = ? ORDER BY tgl_masuk desc', [$nomorrm]);
        $COUNTER = DB::select('SELECT DISTINCT counter from ts_kunjungan where no_rm = ?', [$nomorrm]);
        $dokter = DB::select('SELECT * from mt_kuota_dokter_poli where kode_poli = ?', [$unit_log]);
        $all_licencies = collect();
        foreach ($COUNTER as $key => $column) {
            $layanan = DB::select("CALL RINCIAN_BIAYA_FINAL('$nomorrm','$column->counter','1','1')");
            $all_licencies = $all_licencies->merge($layanan);
        }
        if ($kelas == '') {
            $kelas = 3;
        }
        
        $tarif = DB::select("CALL SP_PANGGIL_TARIF_TINDAKAN_RS('$kelas','','1008')");
        // $periode = DB::select('SELECT DATE(ts_kunjungan.tgl_masuk) AS tanggal_masuk FROM ts_kunjungan 
        // LEFT OUTER JOIN ts_layanan_header ON ts_kunjungan.kode_kunjungan = ts_layanan_header.kode_kunjungan
        // LEFT OUTER JOIN ts_layanan_detail ON ts_layanan_header.id = ts_layanan_detail.row_id_header
        // WHERE no_rm = ? GROUP BY ts_kunjungan.tgl_masuk DESC',[$nomorrm]);
        $ass_per = DB::select('SELECT *  from erm_assesmen_keperawatan_rajal where no_rm = ? and kode_kunjungan = ? and kode_unit = ?', [$nomorrm,$kodekunjungan,$unit_log]);
        //query aambil riwayat medis
        return view('erm2.pasienterpilih', [
            'rm' => $nomorrm,
            'dokter' => $dokter,
            'kelas' => $kelas,
            'nama' =>  $nama,
            'alamat' => $alamat,
            'tglmasuk' => $tglmasuk,
            'kodekunjungan' => $kodekunjungan,
            'kunjungan' => $all_licencies,
            'periode' => $periode,
            'umur' => $umur,
            'tglkunjugan' => $request->tglkunjugan,
            'ass_per' => $ass_per,
            'counter' => $counter,
            'unit' => $unit,
            'tarif' => $tarif
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
        $counter = $request->counter;
        $tglkunjugan = $request->tglkunjugan;
        $umur = $request->umur;
        $periode = DB::select('SELECT DISTINCT DATE(tgl_masuk) as tgl_masuk from ts_kunjungan where no_rm = ? ORDER BY tgl_masuk desc', [$nomorrm]);
        $counter = DB::select('SELECT DISTINCT counter from ts_kunjungan where no_rm = ?', [$nomorrm]);

        if ($id == 3) {
            return view('erm2.rm03', [
                'now' => Carbon::now()->timezone('Asia/Jakarta'),
                'tglkunjungan' => $tglkunjugan,
                'counter' => $counter,
                'pasien' => DB::select('SELECT * from mt_pasien where no_rm = ?', [$nomorrm]),
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
    public function carilayanan(request $request)
    {
        $layanan = $request->layanan;
        $unit = auth()->user()->unit;
        $layanan = DB::select("CALL SP_PANGGIL_TARIF_TINDAKAN_RS('2','$layanan','$unit')");
        return view('erm.tabellayanan', [
            'layanan' => $layanan
        ]);
    }
    public function simpanrm03(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        $unit_log = auth()->user()->unit;
        $counter = $request->counter;
        $dataSet['rm'] = $request->rm;
        $dataSet['kodekunjungan'] =  $request->kodekunjungan;
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
            'tglwaktu_assesmen'=> $dataSet['tanggalassesmen_px'],
            'kode_kunjungan' => $dataSet['kodekunjungan'],
            'no_rm' => $dataSet['rm'],
            'sumber_data' => $dataSet['sumberdata'],
            'keluhan_utama' => $dataSet['keluhanutama'],
            'riwayat_penyakit' => $dataSet['riwayatpenyakit'],
            'riwayat_alergi_0' => $dataSet['riwayatalergi'],
            'riwayat_alergi_1' =>'',
            'riwayat_obat_minum' => $dataSet['riwayatobat'],
            'pemeriksaan_fisik' => $dataSet['pemeriksaanfisik'],
            'diagnosis' => $dataSet['diagnosa'],
            'rencana_terapi' => $dataSet['rencanaterapi'],
            'rencana_pemeriksaan_penunjang' => $dataSet['rencanapemeriksaanpenunjang'],
            'dirujuk_ke' => $dataSet['dirujuk'],
            'tglwaktu_selesai' => Carbon::now()->timezone('Asia/Jakarta'),
            'dpjp' =>  auth()->user()->kode_dpjp,
            'kode_unit' => $unit_log,
            'kunjungan_bl' => $counter,
            'signature' => $dataSet['signature'],
        ];
        $now = date('Y-m-d');
        $cek = DB::select('SELECT * from erm_assesmen_awal_medis_rajal WHERE date(tglwaktu_assesmen) = ? AND no_rm = ? AND kode_unit = ?',[$now,$dataSet['rm'],auth()->user()->unit]);
        if(count($cek) > 0){
            assesmenawal_med::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);
        }else{
            $erm_assesmen = assesmenawal_med::create($data);
        }
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
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
            'riwayat_psikologis' => $dataSet['pekerjaan_pasienbaru'],
            'stafungsi_Alatbantu' => $dataSet['alatbantu_pasienbaru'],
            'stafungsi_cacattubuh' => $dataSet['cacat_pasienbaru'],
            'assesmen_nyeri' => $dataSet['nyeri_pasienbaru'],
            'assesmen_resikojatuh' => $dataSet['resikojatuh_pasienbaru'],
            'Skri_gizi_1' => $dataSet['skrininggizi_pasienbaru'],
            'Skri_gizi_2' => $dataSet['beratskrininggizi_pasienbaru'],
            'Skri_gizi_3' => $dataSet['asupanmkanan_pasienbaru'],
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
        $cek = DB::select('SELECT * from erm_assesmen_keperawatan_rajal WHERE date(tglwaktu_assesmen) = ? AND no_rm = ? AND kode_unit = ?',[$now,$dataSet['rm'],auth()->user()->unit]);
        if(count($cek) > 0){
            assesmenawal::whereRaw('no_rm = ? and kode_unit = ? and date( tglwaktu_assesmen ) = ?', array($dataSet['rm'], auth()->user()->unit, $now))->update($data);
        }else{
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
            'tglwaktu_assesmen' => $dataSet['tgldanjamkunjungan_pasienlama'],
            'kode_kunjungan' => $dataSet['kode_kunjungan'],
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

        $erm_assesmen_awal = assesmenawal::create($data);

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
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
        $erm_assesmen = assesmenawal::create($data);
        dd($erm_assesmen);
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
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        $dataSet['nama'] = $namapasien;
        $dataSet['unit'] = $unit;
        $dataSet['umur'] = $umur;
        $dataSet['alamat'] = $alamat;
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
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
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
        $dataSet['rm'] = $rm;
        $dataSet['kodekunjungan'] = $kodekunjungan;
        $dataSet['tanggalmasuk'] = $tglmasuk;
        $dataSet['nama'] = $namapasien;
        $dataSet['unit'] = $unit;
        $dataSet['umur'] = $umur;
        $dataSet['alamat'] = $alamat;
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
            'kode_kunjungan' => $dataSet['kodekunjungan']
        ];
        $data = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($data);
        die;
    }
    public function simpanlayanan(Request $request)
    {
        //ts_layanan_header
        $kodekunjungan = $request->kodekunjungan;
        $kunjungan = DB::select('SELECT * from ts_kunjungan where kode_kunjungan = ?', [$kodekunjungan]);
        $header = DB::select('SELECT * from ts_layanan_header where kode_kunjungan = ?', [$kodekunjungan]);
        $kodeunit = $kunjungan[0]->kode_unit;
        $penjamin = $kunjungan[0]->kode_penjamin;
        $kodelayananheader = $header[0]->kode_layanan_header;
        $tglentry = '123';
        $kodetipetransaksi = '123';
        $pic = '123';
        $statuslaynan = '123';
        $totallayanan = '123';
        $staturetur = '123';
        $tagihanpribadi = '123';
        $dokkirim = '123';
        $unitpengirim = '123';
        $diagnosa = '123';

        //ts_layanan detail
        $idlayanandetail = '123';
        $kodetarifdetail = '123';
        $totaltarif = '123';
        $jumlahlayanan = '123';
        $kodedokter = '1213';
        $tgllayanandetail = '1213';
        $tagihanpribadi = '1213';
        $tagihanpenjamin = '1213';
        $row_id_header = '123';

        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'qty') {
                $arrayindex[] = $dataSet;
            }
        }
        //masuk database
        foreach ($arrayindex as $arr) {
            if ($penjamin == 'P01') {
                $save_detail = [
                    'id_layanan_detail' => 'belum dibikin',
                    'kode_layanan_header' => $kodelayananheader,
                    'kode_tarif_detail' => $arr['kodelayanan'],
                    'total_tarif' => $arr['tarif'],
                    'jumlah_layanan' => $arr['qty'],
                    'diskon_layanan' => '0',
                    'total_layanan' => $arr['tarif'] * $arr['qty'],
                    'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                    'status_layanan_detail' => 'OPN',
                    'kode_dokter1' => $request->dokterpemeriksa,
                    'tgl_layanan_detail' => '',
                    'tagihan_pribadi' => $arr['tarif'] * $arr['qty'],
                    'tgl_layanan_detail_2' => '',
                    'row_id_header' => $header[0]->id
                ];
            } else {
                $save_detail = [
                    'id_layanan_detail' => 'belum dibikin',
                    'kode_layanan_header' => $kodelayananheader,
                    'kode_tarif_detail' => $arr['kodelayanan'],
                    'total_tarif' => $arr['tarif'],
                    'jumlah_layanan' => $arr['qty'],
                    'diskon_layanan' => '0',
                    'total_layanan' => $arr['tarif'] * $arr['qty'],
                    'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                    'status_layanan_detail' => 'OPN',
                    'kode_dokter1' => $request->dokterpemeriksa,
                    'tgl_layanan_detail' => '',
                    'tagihan_penjamin' => $arr['tarif'] * $arr['qty'],
                    'tgl_layanan_detail_2' => '',
                    'row_id_header' => $header[0]->id
                ];
            }
            dd($save_detail);
        }
    }
}
