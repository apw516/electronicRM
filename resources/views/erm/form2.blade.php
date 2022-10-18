<div class="card scroll container">
    <div class="card-header">
        RM.02.01-RJ / Pasien Lama ( dewasa )
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <form action="" class="simpanrm2lama">
        <table class="table table-sm text-xs">
            <tr>
                <td>Tanggal & Jam Kunjungan</td>
                <td><input readonly class="form-control form-control-sm" id="tgldanjamkunjungan_pasienlama" name="tgldanjamkunjungan_pasienlama" value="{{ $now }}"></td>
            </tr>
            <tr>
                <td>Tanggal & Jam Pengkajian</td>
                <td><input class="form-control form-control-sm" value="{{ $now }}" id="tgldanpengkajian_pasienlama" name="tgldanpengkajian_pasienlama"></td>
            </tr>
            <tr>
                <td>Sumber Data</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="sumberdata_pasienlama" id="sumberdata_pasienlama" value="1" checked>
                        <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="sumberdata_pasienlama" id="sumberdata_pasienlama" value="2">
                        <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Keluhan Utama</td>
                <td>
                    <textarea class="form-control form-control-sm" id="keluhanutama_pasienlama" name="keluhanutama_pasienlama"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-center bg-secondary">Tanda tanda Vital</td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="tekanandarah_pasienlama" id="tekanandarah_pasienlama" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">mmHg</div>
                        </div>
                    </div>
                </td>
                <td>Frekuensi Nadi</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="frekuensinadi_pasienlama" id="frekuensinadi_pasienlama" class="form-control form-control-sm" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Frekuensi Napas</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="frekuensinapas_pasienlama" id="frekuensinapas_pasienlama" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">X / Menit</div>
                        </div>
                    </div>
                </td>
                <td>Suhu</td>
                <td>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control form-control-sm" name="suhu_pasienlama" id="suhu_pasienlama" />
                        <div class="input-group-append">
                            <div class="input-group-text text-xs">C</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Riwayat Psikologis</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienlama" id="RP_pasienlama" value="1 | cemas">
                        <label class="form-check-label" for="inlineRadio1">Cemas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienlama" id="RP_pasienlama" value="2 | Takut">
                        <label class="form-check-label" for="inlineRadio2">Takut</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="RP_pasienlama" id="RP_pasienlama" value="3 | Sedih">
                        <label class="form-check-label" for="inlineRadio1">Sedih</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="RP_pasienlama" id="RP_pasienlama" value="4 | Lainya" checked>
                        <label class="form-check-label" for="inlineRadio2">Lain -
                            lain</label>
                    </div>
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Status Fungsional</td>
            </TR>
            <tr>
                <td>Penggunaam Alat Bantu</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienlama" id="alatbantu_pasienlama" value="1 | Tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="alatbantu_pasienlama" id="alatbantu_pasienlama" value="2 | Tongkat">
                        <label class="form-check-label" for="inlineRadio2">Tongkat</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienlama" id="alatbantu_pasienlama" value="3 | Kursi Roda">
                        <label class="form-check-label" for="inlineRadio1">Kursi Roda</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Cacat Tubuh</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="cacat_pasienlama" id="cacat_pasienlama" value="1 | tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="cacat_pasienlama" id="cacat_pasienlama" value="2 | ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" placeholder="Sebutkan cacat tubuh ...">
                </td>
            </tr>
            <TR>
                <td colspan="4" class="text-center bg-secondary mt-3">Assement Nyeri</td>
            </TR>
            <tr>
                <td>Apakah Pasien Mengeluh Nyeri</td>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="nyeri_pasienlama" id="nyeri_pasienlama" value="1 | tidak" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mr-3" type="radio" name="nyeri_pasienlama" id="nyeri_pasienlama" value="2 | ya">
                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" name="skalanyeripasienlama" id="skalanyeripasienlama" placeholder="skala nyeri ...">
                    <img src="{{ asset('public/img/skalanyeri.jpg') }}" width="350px" alt="">
                </td>
            </tr>
        </table>
        <table class="table table-bordered table-sm">
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
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienlama" id="resikojatuh_pasienlama" value="1 | Tidak Beresiko">
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienlama" id="resikojatuh_pasienlama" value="2 | Resiko Rendah">Risiko rendah ( ditemukan a atau b)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienlama" id="resikojatuh_pasienlama" value="3 | Resiko Tinggi">Risiko tinggi ( a dan b ditemukan )</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-2 mr-3" type="radio" name="resikojatuh_pasienlama" id="resikojatuh_pasienlama" value="4 | Tidak Beresiko" checked>
                        <label class="form-check-label" for="inlineRadio1">Tidak Beresiko ( Tidak ditemukan a dan b )</label>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-bordered table-sm">
            <thead>
                <th colspan="3">Skrinning Gizi</th>
                <tr>
                    <th colspan="3">Metode Malnutrition Screnning Tools ( Pasien Dewasa )</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">1. Apakah pasien mengalami penurunan berat badan yang tidak diinginkan dalam 6 bulan
                        terakhir ?</td>
                    <td>Skor</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama" value="1 | Tidak ada penurunan berat badan" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak ada penurunan berat badan</label>
                        </div>
                    </td>
                    <td rowspan="3">
                        <textarea readonly class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienlama1" id="skrininggizi_pasienlama1" value="2 | Tidak yakin/tidak tahu">
                            <label class="form-check-label" for="inlineRadio1">Tidak yakin / tidak tahu / terasa baju lebih
                                longgar</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="skrininggizi_pasienlama2" id="skrininggizi_pasienlama2" value="3 | Ya">
                            <label class="form-check-label" for="inlineRadio1">Jika YA,berapa berat badan tersebut</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1" type="radio" name="beratskrininggizi_pasienbaru" id="beratskrininggizi_pasienbaru" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1" checked>Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-1" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama" value="1 | 1 - 5 Kg">
                            <label class="form-check-label" for="inlineRadio1">1 - 5 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama3" value="2 | 6 - 10 Kg">
                            <label class="form-check-label" for="inlineRadio2">6 - 10 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama" value="3 | 11 - 15 Kg">
                            <label class="form-check-label" for="inlineRadio2">11 - 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama" value="4 | > 15 Kg">
                            <label class="form-check-label" for="inlineRadio2"> > 15 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-1" type="radio" name="skrininggizi_pasienlama" id="skrininggizi_pasienlama" value="5 | Tidak yakin penurunanya">
                            <label class="form-check-label" for="inlineRadio2"> Tidak yakin penurunannya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">2. Apakah asupan makanan berkurang karena berkurangnya nafsu makan</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="asupanmakan_pasienlama" id="asupanmakan_pasienlama" value="1 | Tidak" checked>
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td rowspan="2">
                        <textarea readonly class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="asupanmakan_pasienlama" id="asupanmakan_pasienlama" value="2 | Ya">
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-secondary">
                    <td colspan="2" class="text-center">
                        <h5>Total Skor</h5>
                    </td>
                    <td><input readonly type="text" class="form-control form-control-sm"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-bold">3. Pasien dengan diagnosa khusus : Penyakit DM / Ginjal /
                        Hati /
                        Paru / Stroke / Kanker
                        / Penurunan imunitas geriatri, lain lain...</td>
                    <td>
                        <textarea class="form-control form-control-sm" name="penyakitlainpasien" placeholder="sebutkan jika ada penyakit lain ...."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienlama" id="diagnosakhusus_pasienlama" value="1 | Tidak">
                            <label class="form-check-label" for="inlineRadio2"> Tidak </label>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="diagnosakhusus_pasienlama" id="diagnosakhusus_pasienlama" value="2 | ya" checked>
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
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienlama" id="malnutrisi_pasienlama" value="1 | Tidak">
                            <label class="form-check-label" for="inlineRadio2"> Tidak</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input  ml-2 mr-1" type="radio" name="malnutrisi_pasienlama" id="malnutrisi_pasienlama" value="2 | Ya" checked>
                            <label class="form-check-label" for="inlineRadio2"> Ya</label>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="" readonly class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Diagnosa Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="diagnosakeperawatan" class="form-control" placeholder="ketik diagnosa keperawatan ..."></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Rencana Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="rencanakeperawatan" class="form-control" placeholder="ketik rencana keperawatan ..."></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Tindakan Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="tindakankeperawatan" class="form-control" placeholder="ketik tindakan keperawatan ..."></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-md text-bold bg-secondary">Evaluasi Keperawatan</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="evaluasikeperawatan" class="form-control" placeholder="ketik evaluasi keperawatan ..."></textarea></td>
                </tr>

            </tbody>
        </table>
        <table class="table table-sm text-xs">
            <tr>
                <td>Tanggal Assesmen Perawat</td>
                <td>Nama Perawat</td>
                <td>Tanda Tangan Dokter</td>
            </tr>
            <tr>
                <td><textarea name="tanggal_assesmen" id="tanggal_assesmen" cols="50" rows="10"> {{ $now }}</textarea></td>

                <td><textarea name="nama_perawat" id="nama_perawat" cols="50" rows="10">{{ strtoupper(auth()->user()->name) }}</textarea></td>
                <td>
                    <div id="signature-pad">
                        <div style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
                            <div id="note" onmouseover="my_function();">tulis tanda tangan didalam box ...
                            </div>
                            <canvas id="the_canvas" width="350px" height="100px"></canvas>
                        </div>
                        <div style="margin:10px;">
                            <input type="hidden" id="signature" name="signature">
                            <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span>
                                Clear</button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="col-md-12 justify-content-end mb-2">
            <button type="button" class="btn btn-success float-right mr-2 tombolsimpanrm2lama">Simpan</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        tglkunjungan = $('#tglmasuk').val()
        $('#tgldanjamkunjungan').val(tglkunjungan)
    });
    $(document).ready(function() {
        $('.tombolsimpanrm2lama').click(function() {
            var data = $('.simpanrm2lama').serializeArray();
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
                    tglmasuk,
                },
                url: '<?= route('simpanrm02lama') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops....',
                        text: 'Sepertinya ada masalah......',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss...',
                            text: data.message,
                            footer: ''
                        })
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