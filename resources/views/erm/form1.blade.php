<div class="card scroll">
    <div class="card-header">
        RM.02.01-RJ / Pasien dewasa
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <form action="" class="simpanrm2 ">
        <table class="table table-sm text-md">
            <tr>
                <td class="text-bold">Tanggal & Jam Kunjungan</td>
                <td><input readonly class="form-control form-control-sm" name="tgldanjamkunjungan_pasienbaru" id="tgldanjamkunjungan_pasienbaru" value="{{ $tglmasuk }}"></td>
            </tr>
            <tr>
                <td class="text-bold">Tanggal & Jam Pengkajian</td>
                <td><input readonly class="form-control form-control-sm" value="{{ $now }}" id="tgldanjampengkajian_pasienbaru" name="tgldanjampengkajian_pasienbaru"></td>
            </tr>
            <tr>
                <td class="text-bold">Sumber Data</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="sumberdata_pasienbaru" id="sumberdata_pasienbaru" value="Pasien Sendiri " checked>
                        <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="sumberdata_pasienbaru" id="sumberdata_pasienbaru" value="Keluarga">
                        <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Keluhan Utama</td>
                <td>
                    <textarea class="form-control form-control-sm" name="keluhanutama_pasienbaru" id="keluhanutama_pasienbaru"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-center bg-secondary">Tanda tanda Vital</td>
            </tr>
            <tr>
                <td class="text-bold">Tekanan Darah</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="tekanandarah_pasienbaru" id="tekanandarah_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">mmHg</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Frekuensi Nadi</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="frekuensinadi_pasienbaru" id="frekuensinadi_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Frekuensi Napas</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="frekuensinapas_pasienbaru" id="frekuensinapas_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
                <td class="text-bold">Suhu</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="suhu_pasienbaru" id="suhu_pasienbaru" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">°C</div>
                        </div>
                    </div>
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Assesmen
                    Psikologi,Sosial,Ekonomi,Kultural Dan Spiritual</td>
            </TR>
            <tr>
                <td class="text-bold">Pekerjaan Pasien</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="5" @if ($pasien[0]->pekerjaan == 5) checked @endif>
                        <label class="form-check-label" for="inlineRadio1">PNS/TNI/POLRI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="3" @if ($pasien[0]->pekerjaan == 3) checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Wiraswasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="15" @if ($pasien[0]->pekerjaan == 15) checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Pegawai
                            Swasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="11" @if ($pasien[0]->pekerjaan == 11) checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Pensiun</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienbaru" id="pekerjaan_pasienbaru" value="6" @if ($pasien[0]->pekerjaan == 6) checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Tinggal Bersama</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="Suami">
                        <label class="form-check-label" for="inlineRadio1">Suami /
                            Istri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="Sendiri">
                        <label class="form-check-label" for="inlineRadio2">Sendiri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="Anak">
                        <label class="form-check-label" for="inlineRadio1">Anak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="Teman">
                        <label class="form-check-label" for="inlineRadio2">Teman</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="tinggal_pasienbaru" id="tinggal_pasienbaru" value="Orang Tua" checked>
                        <label class="form-check-label" for="inlineRadio2">Orang Tua</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Suku</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="Jawa" checked>
                        <label class="form-check-label" for="inlineRadio1">Jawa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="Sunda">
                        <label class="form-check-label" for="inlineRadio2">Sunda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="Batak">
                        <label class="form-check-label" for="inlineRadio1">Batak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="Tionghoa">
                        <label class="form-check-label" for="inlineRadio2">Tionghoa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="suku_pasienbaru" id="suku_pasienbaru" value="lain - lain">
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Agama</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="1" @if ($pasien[0]->agama == 1) checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="2">
                        <label class="form-check-label" for="inlineRadio2" @if ($pasien[0]->agama == 2) checked @endif>Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="4">
                        <label class="form-check-label" for="inlineRadio1" @if ($pasien[0]->agama == 4) checked @endif>Hindu</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="5">
                        <label class="form-check-label" for="inlineRadio2" @if ($pasien[0]->agama == 5) checked @endif>Budha</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="agama_pasienbaru" id="agama_pasienbaru" value="8" @if ($pasien[0]->agama == 8) checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Riwayat Psikologis</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="cemas ">
                        <label class="form-check-label" for="inlineRadio1">Cemas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="takut">
                        <label class="form-check-label" for="inlineRadio2">Takut</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="sedih">
                        <label class="form-check-label" for="inlineRadio1">Sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienbaru" id="RP_pasienbaru" value="lainnya" checked>
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
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Tongkat">
                        <label class="form-check-label" for="inlineRadio2">Tongkat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienbaru" id="alatbantu_pasienbaru" value="Kursi Roda">
                        <label class="form-check-label" for="inlineRadio1">Kursi Roda</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-bold">Cacat Tubuh</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 cacat_pasienbaru" type="radio" name="cacat_pasienbaru" id="cacat_pasienbaru" value="Tidak" skor="1" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3 cacat_pasienbaru" skor="2" type="radio" name="cacat_pasienbaru" id="cacat_pasienbaru" value="Ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" id="namacacatubuh" name="namacacatubuh" placeholder="Sebutkan cacat tubuh ..." value="tidak ada">
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Assement Nyeri</td>
            </TR>
            <tr>
                <td class="text-bold">Apakah Pasien Mengeluh Nyeri</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 nyeri_pasienbaru" type="radio" skor="1" name="nyeri_pasienbaru" id="nyeri_pasienbaru" value="Tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3 nyeri_pasienbaru" type="radio" skor="2" name="nyeri_pasienbaru" id="nyeri_pasienbaru" value="Ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" value="0" id="skalenyeripasien" name="skalenyeripasien" placeholder="skala nyeri ...">
                    <img src="{{ asset('public/img/skalanyeri.jpg') }}" width="350px" alt="">
                </td>
            </tr>
        </table>
        <table class="table table-sm">
            <thead>
                <th colspan="2">Assement Resiko Jatuh</th>
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
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Tidak beresiko" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b
                            )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Resiko Rendah">Risiko
                        rendah ( ditemukan a atau
                        b)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3 resikojatuh_pasienbaru" type="radio" name="resikojatuh_pasienbaru" id="resikojatuh_pasienbaru" value="Risiko tinggi">Risiko
                        tinggi ( a dan b ditemukan
                        )</label>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-sm">
            <thead>
                <th colspan="3">Skrinning Gizi</th>
                <tr>
                    <th colspan="3">Metode Malnutrition Screnning Tools ( Pasien Dewasa )</th>
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
                            <input skor="0" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="Tidak ada penurunan berat badan" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak ada penurunan berat badan</label>
                        </div>
                    </td>
                    <td rowspan="3">
                        <textarea readonly class="form-control" id="skorskrininggizi">0</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input skor="2" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="tidak yakin / tidak tahu">
                            <label class="form-check-label" for="inlineRadio1">Tidak yakin / tidak tahu / terasa baju
                                lebih
                                longgar</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input skor="10" class="form-check-input ml-2 mr-3 skrininggizi_pasienbaru" type="radio" name="skrininggizi_pasienbaru" id="skrininggizi_pasienbaru" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Jika YA,berapa berat badan
                                tersebut</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1 beratskrininggizi_pasienbaru" type="radio" name="beratskrininggizi_pasienbaru" skor="0" id="beratskrininggizi_pasienbaru" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1" checked>Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1 beratskrininggizi_pasienbaru" skor="1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="1 sd 5 kg">
                            <label class="form-check-label" for="inlineRadio1">1 - 5 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="2" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="6 sd 10 kg">
                            <label class="form-check-label" for="inlineRadio2">6 - 10 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="3" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="11 sd 15 kg">
                            <label class="form-check-label" for="inlineRadio2">11 - 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="4" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value=" > 15 kg">
                            <label class="form-check-label" for="inlineRadio2"> > 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1 beratskrininggizi_pasienbaru" skor="2" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="tidak yakin penurunannya">
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
                            <input class="form-check-input  ml-2 mr-1 asupanmkanan_pasienbaru" skor="0" type="radio" name="asupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td rowspan="2">
                        <textarea readonly class="form-control" id="skorasupanmkanan_pasienbaru">0</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1 asupanmkanan_pasienbaru" skor="1" type="radio" name="asupanmkanan_pasienbaru" id="asupanmkanan_pasienbaru" value="Ya">
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="2" class="text-center">
                        <h5>Total Skor</h5>
                    </td>
                    <td><input readonly type="text" class="form-control form-control-sm" id="totalskorgizi" name="totalskorgizi"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-bold">3. Pasien dengan diagnosa khusus : Penyakit DM / Ginjal /
                        Hati /
                        Paru / Stroke / Kanker
                        / Penurunan imunitas geriatri, lain lain...</td>
                    <td>
                        <textarea class="form-control form-control-sm" name="penyakitlainpasien" placeholder="sebutkan jika ada penyakit lain ....">Tidak ada</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="Tidak">
                            <label class="form-check-label" for="inlineRadio2"> Tidak </label>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienbaru" id="diagnosakhusus_pasienbaru" value="Ya" checked>
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
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienbaru" id="malnutrisi_pasienbaru" value="Ya">
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                    <td>
                        <label for="">*Tanggal pengkajian lanjut</label>
                        <input type="text" name="" class="form-control form-control-sm datepicker" placeholder="Tanggal pengkajian lanjut">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Diagnosa Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="diagnosakeperawatan" class="form-control" placeholder="ketik diagnosa keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Rencana Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="rencanakeperawatan" class="form-control" placeholder="ketik rencana keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Tindakan Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="tindakankeperawatan" class="form-control" placeholder="ketik tindakan keperawatan ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Evaluasi Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea name="evaluasikeperawatan" class="form-control" placeholder="ketik evaluasi keperawatan ..."></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-sm text-md">
            <thead>
                <th class="text-center">Tanggal Assesmen Perawat</th>
                <th class="text-center">Nama Perawat</th>
                <th>Tanda Tangan Dokter</th>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>
                        <textarea readonly disabled name="tanggal_assesmen" class="form-control" id="tanggal_assesmen" cols="30" rows="2"> {{ $now }}</textarea>
                    </td>

                    <td>
                        <textarea readonly disabled name="nama_perawat" class="form-control" id="nama_perawat" cols="30" rows="2">{{ strtoupper(auth()->user()->name) }}</textarea>
                        <textarea hidden name="id_perawat" id="id_perawat" cols="50" rows="10">{{ strtoupper(auth()->user()->id) }}</textarea>
                    </td>
                    <td>
                        <div id="signature-pad">
                            <div style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
                                <div id="note" onmouseover="my_function();">tulis tanda tangan didalam box ...
                                </div>
                                <canvas id="the_canvas" width="350px" height="100px"></canvas>
                            </div>
                            <div style="margin:10px;">
                                <input hidden type="" id="signature" name="signature">
                                <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span>
                                    Clear</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 justify-content-end mb-2">
            <button type="button" class="btn btn-success float-right mr-2 tombol-simpanrm2 mb-3">Simpan</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunjungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $(".tombol-simpanrm2").click(function() {
            cacatpasien = $('#cacat_pasienbaru:checked').val()
            nyeri_pasienbaru = $('#nyeri_pasienbaru:checked').val()

            if (cacatpasien == 'Ya') {
                namacacat = $('#namacacatubuh').val()
                if (namacacatubuh == '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Keterangan cacat tubuh belum diisi...',
                        footer: ''
                    })
                    return
                }
            }
            if (nyeri_pasienbaru == 'Ya') {
                skala = $('#skalenyeripasien').val()
                if (skala == '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Skala nyeri belum diisi...',
                        footer: ''
                    })
                    return
                }
            }
            spinner = $('#loader2');
            spinner.show();
            var canvas = document.getElementById("the_canvas");
            var dataUrl = canvas.toDataURL();
            if (dataUrl ==
                'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAV4AAABkCAYAAADOvVhlAAADOklEQVR4Xu3UwQkAAAgDMbv/0m5xr7hAIcjtHAECBAikAkvXjBEgQIDACa8nIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECDweoABlt2MJjgAAAABJRU5ErkJggg=='
            ) {
                dataUrl = ''
            }
            document.getElementById("signature").value = dataUrl;
            var data = $('.simpanrm2').serializeArray();
            kodekunjungan = $('#kodekunjungan').val()
            rm = $('#nomorrm').val()
            tglmasuk = $('#tglmasuk').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    data: JSON.stringify(data),
                    kodekunjungan,
                    rm,
                    tglmasuk
                },
                url: '<?= route('simpanrm02') ?>',
                error: function(data) {
                    spinner.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah ...',
                        footer: ''
                    })
                },
                success: function(data) {
                    spinner.hide();
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message + " Belum diisi !",
                            footer: ''
                        })
                        var element = document.getElementById(data.message);
                        element.classList.add("is-invalid");
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: 'Data berhasil disimpan!',
                            footer: ''
                        })
                    }
                }
            });
        });
        $(".skrininggizi_pasienbaru").click(function() {
            skor = $(this).attr('skor')
            if (skor == 10) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ada penuruan berat badan pasien...',
                    text: 'Silahkan pilih berat penurunan',
                    footer: ''
                })
            } else {
                $('#skorskrininggizi').val(skor)
                skor1 = skor
                skor2 = $('#skorasupanmkanan_pasienbaru').val()
                total = parseInt(skor1) + parseInt(skor2)
                $('#totalskorgizi').val(total)
            }
        });
        $(".beratskrininggizi_pasienbaru").click(function() {
            skor = $(this).attr('skor')
            $('#skorskrininggizi').val(skor)
            skor1 = skor
            skor2 = $('#skorasupanmkanan_pasienbaru').val()
            total = parseInt(skor1) + parseInt(skor2)
            $('#totalskorgizi').val(total)
        });
        $(".asupanmkanan_pasienbaru").click(function() {
            skor = $(this).attr('skor')
            $('#skorasupanmkanan_pasienbaru').val(skor)
            skor1 = skor
            skor2 = $('#skorskrininggizi').val()
            total = parseInt(skor1) + parseInt(skor2)
            $('#totalskorgizi').val(total)
        });
        $(".cacat_pasienbaru").click(function() {
            skor = $(this).attr('skor')
            if (skor == 2) {
                document.getElementById("namacacatubuh").focus();
                $('#namacacatubuh').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'Ada cacat tubuh pasien...',
                    text: 'Silahkan ketik keterangan cacat tubuh',
                    footer: ''
                })
            } else {
                $('#namacacatubuh').val('Tidak ada')
            }
        });
        $(".nyeri_pasienbaru").click(function() {
            skor = $(this).attr('skor')
            if (skor == 2) {
                document.getElementById("skalenyeripasien").focus();
                $('#skalenyeripasien').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'Ada keluhan nyeri ...',
                    text: 'Silahkan input skala nyeri ...',
                    footer: ''
                })
            } else {
                $('#skalenyeripasien').val('0')
            }
        });

    });
</script>
<script>
    var wrapper = document.getElementById("signature-pad");
    var clearButton = wrapper.querySelector("[data-action=clear]");
    var canvas = wrapper.querySelector("canvas");
    var el_note = document.getElementById("note");
    var signaturePad;
    signaturePad = new SignaturePad(canvas);
    clearButton.addEventListener("click", function(event) {
        document.getElementById("note").innerHTML = "The signature should be inside box";
        signaturePad.clear();
    });

    function my_function() {
        document.getElementById("note").innerHTML = "";
    }
</script>