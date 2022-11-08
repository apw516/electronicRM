<div class="card card-light collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Assesmen Awal Keperawatan Rawat Jalan</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body scroll2">
        @if($cek_asskep == '0')
        <h5 class="text-danger">
            Tidak ada data !
        </h5>
        @else
        <table class="table table-md text-md">
            <!-- <tr>
                <td class="text-bold">Tanggal & Jam Kunjungan</td>
                <td><input readonly class="form-control form-control-md" name="edittgldanjamkunjungan_pasienbaru" id="tgldanjamkunjungan_pasienbaru" value=""></td>
            </tr> -->
            <tr>
                <td class="text-bold">Tanggal & Jam Pengkajian</td>
                <td><input readonly class="form-control form-control-md" value="{{ $data[0]->tglwaktu_assesmen }}" id="tgldanjampengkajian_pasienbaru" name="edittgldanjampengkajian_pasienbaru"></td>
            </tr>
            <tr>
                <td class="text-bold">Sumber Data</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="editsumberdata_pasienbaru" id="sumberdata_pasienbaru" value="Pasien Sendiri " @if($data[0]->sumber_data == 'Pasien Sendiri ') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="editsumberdata_pasienbaru" id="sumberdata_pasienbaru" value="Keluarga" @if($data[0]->sumber_data == 'Keluarga') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Keluhan Utama</td>
                <td>
                    <textarea class="form-control form-control-sm" name="editkeluhanutama_pasienbaru" id="keluhanutama_pasienbaru">{{ $data[0]->keluhan_utama }}</textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-center bg-secondary">Tanda tanda Vital</td>
            </tr>
            <tr>
                <td class="text-bold">Tekanan Darah</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="edittekanandarah_pasienbaru" id="tekanandarah_pasienbaru" value="{{ $data[0]->ttv_tekanan_darah }}" />
                        <div class="input-group-append">
                            <div class="input-group-text text-md">mmHg</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Frekuensi Nadi</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="editfrekuensinadi_pasienbaru" id="frekuensinadi_pasienbaru" value="{{ $data[0]->ttv_freq_nadi }}" />
                        <div class="input-group-append">
                            <div class="input-group-text text-md">X / Menit</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Frekuensi Napas</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="editfrekuensinapas_pasienbaru" id="frekuensinapas_pasienbaru" value="{{ $data[0]->ttv_freq_napas }}" />
                        <div class="input-group-append">
                            <div class="input-group-text text-md">X / Menit</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Suhu</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="editsuhu_pasienbaru" id="suhu_pasienbaru" value="{{ $data[0]->ttv_suhu }}" />
                        <div class="input-group-append">
                            <div class="input-group-text text-md">°C</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Riwayat Psikologis</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="editRP_pasienbaru" id="RP_pasienbaru" value="cemas " @if($data[0]->riwayat_Psikologis == 'cemas ') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Cemas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="editRP_pasienbaru" id="RP_pasienbaru" value="takut" @if($data[0]->riwayat_Psikologis == 'takut') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Takut</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="editRP_pasienbaru" id="RP_pasienbaru" value="sedih" @if($data[0]->riwayat_Psikologis == 'sedih') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="editRP_pasienbaru" id="RP_pasienbaru" value="lainnya" @if($data[0]->riwayat_Psikologis == 'lainnya') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Status Fungsional</td>
            </TR>
            <tr>
                <td class="text-bold">Penggunaan Alat Bantu</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="editalatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Tidak" @if($data[0]->stafungsi_Alatbantu == 'Tidak') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="editalatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Tongkat" @if($data[0]->stafungsi_Alatbantu == 'Tongkat') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Tongkat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="editalatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Kursi Roda" @if($data[0]->stafungsi_Alatbantu == 'Kursi Roda') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Kursi Roda</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Cacat Tubuh</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 cacat_pasienbaru" type="radio" name="editcacat_pasienbaru" id="cacat_pasienbaru" value="Tidak" skor="1" @if($data[0]->stafungsi_cacattubuh == 'Tidak') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3 cacat_pasienbaru" skor="2" type="radio" name="editcacat_pasienbaru" id="cacat_pasienbaru" value="Ya" @if($data[0]->stafungsi_cacattubuh == 'Ya') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mt-3" id="namacacatubuh" name="editnamacacatubuh" placeholder="Sebutkan cacat tubuh ..." value="{{ $data[0]->keterangan_cacat_tubuh }}">
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center text-bold bg-secondary mt-3">Assesmen Nyeri</td>
            </TR>
            <tr class="text-bold">
                <td class="text-bold">Apakah Pasien Mengeluh Nyeri</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 nyeri_pasienbaru" type="radio" skor="1" name="editnyeri_pasienbaru" id="nyeri_pasienbaru" value="Tidak" @if($data[0]->assesmen_nyeri == 'Tidak') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3 nyeri_pasienbaru" type="radio" skor="2" name="editnyeri_pasienbaru" id="nyeri_pasienbaru" value="Ya" @if($data[0]->assesmen_nyeri == 'Ya') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-md mt-2" id="skalenyeripasien" name="editskalenyeripasien" value="{{ $data[0]->keterangan_skala_nyeri }}" placeholder="skala nyeri ...">
                    <img src="{{ asset('public/img/skalanyeri.jpg') }}" width="350px" alt="">
                </td>
            </tr>
        </table>
        <table class="table table-md text-md ">
            <thead class="text-bold">
                <th colspan="2">Assesmen Resiko Jatuh</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="bg-warning">Metode Get Up and Go</td>
                </tr>
                <tr class="bg-secondary">
                    <td>Faktor resiko</td>
                    <td>Skala</td>
                </tr>
                <tr>
                    <td class="text-center">a</td>
                    <td>Perhatikan cara berjalan pasien saat akan duduk dikursi. Apakah pasien tampak tidak seimbang (
                        sempoyongan / limbung ) ?</td>
                </tr>
                <tr>
                    <td class="text-center">b</td>
                    <td>Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang saat akan
                        duduk ?</td>
                </tr>
            </tbody>
            <tr>
                <td colspan="2" class="text-bold">Hasil</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="editresikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Tidak beresiko" @if($data[0]->assesmen_resikojatuh == 'Tidak beresiko') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b
                            )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="editresikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Resiko Rendah" @if($data[0]->assesmen_resikojatuh == 'Resiko Rendah') checked @endif>Risiko
                        rendah ( ditemukan a atau
                        b)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="editresikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Risiko tinggi" @if($data[0]->assesmen_resikojatuh == 'Risiko tinggi') checked @endif>Risiko
                        tinggi ( a dan b ditemukan
                        )</label>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-md  text-md">
            <thead>
                <th colspan="3" class="text-bold">Skrinning Gizi</th>
                <tr>
                    <th colspan="3" class="text-bold">Metode Malnutrition Screnning Tools ( Pasien Dewasa )</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-bold" colspan="2">1. Apakah pasien mengalami penurunan berat badan yang tidak
                        diinginkan dalam 6 bulan
                        terakhir ?</td>
                    <td>Skor</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input skor="0" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="editskrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="Tidak ada penurunan berat badan" @if($data[0]->Skri_gizi_1 == 'Tidak ada penurunan berat badan') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Tidak ada penurunan berat badan</label>
                        </div>
                    </td>
                    <td rowspan="3">
                        <textarea readonly class="form-control" name="editskorskrininggizi" id="skorskrininggizi">{{ $data[0]->skor_penurunan_berat_badan }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input skor="2" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="editskrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="tidak yakin / tidak tahu" @if($data[0]->Skri_gizi_1 == 'tidak yakin / tidak tahu') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Tidak yakin / tidak tahu / terasa baju
                                lebih
                                longgar</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input skor="10" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="editskrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="Ya" @if($data[0]->Skri_gizi_1 == 'Ya') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Jika YA,berapa berat badan
                                tersebut</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1 beratskrininggizi_pasienbaru" type="radio" name="editberatskrininggizi_pasienbaru" skor="0" id="beratskrininggizi_pasienbaru" value="Tidak" @if($data[0]->Skri_gizi_2 == 'Tidak') checked @endif>
                            <label class="form-check-label" for="inlineRadio1" checked>Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1 beratskrininggizi_pasienbaru" skor="1" type="radio" name="editberatskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="1 sd 5 kg" @if($data[0]->Skri_gizi_2 == '1 sd 5 kg') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">1 - 5 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="2" type="radio" name="editberatskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="6 sd 10 kg" @if($data[0]->Skri_gizi_2 == '6 sd 10 kg') checked @endif>
                            <label class="form-check-label" for="inlineRadio2">6 - 10 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="3" type="radio" name="editberatskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="11 sd 15 kg" @if($data[0]->Skri_gizi_2 == '11 sd 15 kg') checked @endif>
                            <label class="form-check-label" for="inlineRadio2">11 - 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="4" type="radio" name="editberatskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value=" > 15 kg" @if($data[0]->Skri_gizi_2 == '> 15 kg') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> > 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="2" type="radio" name="editberatskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="tidak yakin penurunannya" @if($data[0]->Skri_gizi_2 == 'tidak yakin penurunannya') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Tidak yakin penurunannya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-bold">2. Apakah asupan makanan berkurang karena berkurangnya nafsu
                        makan</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1 asupanmkanan_pasienbaru" skor="0" type="radio" name="editasupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="Tidak" @if($data[0]->Skri_gizi_3 == 'Tidak') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td rowspan="2">
                        <textarea readonly class="form-control" name="editskorasupanmkanan_pasienbaru" id="skorasupanmkanan_pasienbaru">{{ $data[0]->skor_asupan_makanan }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1 asupanmkanan_pasienbaru" skor="1" type="radio" name="editasupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="Ya" @if($data[0]->Skri_gizi_3 == 'Ya') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-secondary text-bold">
                    <td colspan="2" class="text-center">
                        <h5>Total Skor</h5>
                    </td>
                    <td><input readonly type="text" class="form-control form-control-sm" id="totalskorgizi" name="edittotalskorgizi" value="{{ $data[0]->skor_total_skr_gizi }}"></td>
                </tr>
                <tr class="text-bold text-md">
                    <td colspan="2" class="text-bold">3. Pasien dengan diagnosa khusus : Penyakit DM / Ginjal /
                        Hati /
                        Paru / Stroke / Kanker
                        / Penurunan imunitas geriatri, lain lain...</td>
                    <td>
                        <textarea class="form-control form-control-sm" name="editpenyakitlainpasien" placeholder="sebutkan jika ada penyakit lain ....">{{ $data[0]->keterangan_diagnosa_khusus }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="editdiagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="Tidak" @if($data[0]->Skri_gizi_4 == 'Tidak') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Tidak </label>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="editdiagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="Ya" @if($data[0]->Skri_gizi_4 == 'Ya') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-bold">Bila skor >= 2, pasien beresiko malnutrisi dilakukan
                        pengkajian
                        lanjut oleh ahli gizi</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="editmalnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="Tidak" @if($data[0]->malnutrisi_pasien == 'Tidak') checked @endif >
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="editmalnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="Ya" @if($data[0]->malnutrisi_pasien == 'Ya') checked @endif>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                    <td>
                        <label for="">*Tanggal pengkajian lanjut</label>
                        <input type="text" name="edittglpengkajianlanjut" class="form-control form-control-sm datepicker" placeholder="Tanggal pengkajian lanjut" value="{{ $data[0]->tanggal_pengkajian_lanjut_gizi }}">
                    </td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3" class="text-md text-bold bg-secondary">Diagnosa Keperawatan/Kebidanan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="editdiagnosakeperawatan" class="form-control" placeholder="ketik diagnosa keperawatan ...">{{ $data[0]->diag_perawat }}</textarea>
                    </td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3" class="text-md text-bold bg-secondary">Rencana Keperawatan/Kebidanan</td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3">
                        <textarea name="editrencanakeperawatan" class="form-control" placeholder="ketik rencana keperawatan ...">{{ $data[0]->rencana_perawat }}</textarea>
                    </td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3" class="text-md text-bold bg-secondary">Tindakan Keperawatan/Kebidanan</td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3">
                        <textarea name="edittindakankeperawatan" class="form-control" placeholder="ketik tindakan keperawatan ...">{{ $data[0]->tindakan_perawat }}</textarea>
                    </td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3" class="text-md text-bold bg-secondary">Evaluasi Keperawatan/Kebidanan</td>
                </tr>
                <tr class="text-bold">
                    <td colspan="3">
                        <textarea name="editevaluasikeperawatan" class="form-control" placeholder="ketik evaluasi keperawatan ...">{{ $data[0]->evaluasi_perawat }}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table text-bold table-md text-md">
            <thead>
                <th class="text-center">Tanggal Assesmen Perawat/Bidan</th>
                <th class="text-center">Nama Perawat/Bidan</th>
                <th>Tanda Tangan Perawat/Bidan</th>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>
                        <textarea readonly disabled name="edittanggal_assesmen" class="form-control" id="tanggal_assesmen" cols="30" rows="2" value="{{ $data[0]->tglwaktu_assesmen }}"></textarea>
                    </td>

                    <td>
                        <textarea readonly disabled name="editnama_perawat" class="form-control" id="nama_perawat" cols="30" rows="2">{{ strtoupper(auth()->user()->name) }}</textarea>
                        <textarea hidden name="editid_perawat" id="id_perawat" cols="50" rows="10">{{ strtoupper(auth()->user()->id) }}</textarea>
                    </td>
                    <td>
                        <div id="signature-pad">
                            <img width="200px" src="{{ $data[0]->ttd_perawat }}" alt="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>
</div>
<div class="card card-light collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Assesmen Awal Medis Rawat Jalan</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body scroll2">
        @if($cek_assmed == '0')
        <h5 class="text-danger">
            Tidak ada data !
        </h5>
        @else
        ada
        @endif
    </div>
</div>
<div class="card card-light collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Order Layanan Penunjang</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body scroll2">
        @if($cekorder != 0)
        @foreach($order as $o)
        <div class="card card-dark">
            <div class="card-header text-md"> {{ $o->nama_unit }}| {{$o->kode_layanan_header}}</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Nama Layanan</th>
                        <th>Jumlah</th>
                        <th>Diskon dokter</th>
                        <th>Diskon Layanan</th>
                        <th>Tarif</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @foreach($orderdetail as $od)
                        @if($od->kode_layanan_header == $o->kode_layanan_header)
                        <tr>
                            <td>{{ $od->NAMA_TARIF }}</td>
                            <td>{{ $od->jumlah_layanan }}</td>
                            <td>{{ $od->diskon_dokter }}</td>
                            <td>{{ $od->diskon_layanan }}</td>
                            <td>{{ $od->total_tarif }}</td>
                            <td>{{ $od->total_layanan }}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endforeach
        @else
        <h5 class="text-danger">Tidak ada data</h5>
        @endif
    </div>
    <!-- /.card-body -->
</div>