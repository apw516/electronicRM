<div class="card">
    <div style="font-family:calibri" class="card-header bg-info text-md">ASSESMEN AWAL MEDIS RAWAT JALAN - RM.03.01-RJ
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="" class="simpanrm3">
            <table style="font-family:calibri" class="table text-bold text-md">
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td><input readonly type="text" class="form-control" name="tanggalkunjungan_px"
                            value="{{ $tglkunjungan }}"></td>
                    <td>Tanggal Assesmen</td>
                    <td><input type="text" class="form-control" readonly name="tanggalassesmen_px"
                            value="{{ $now }}"></td>
                </tr>
                <tr>
                    <td>Sumber Data</td>
                    <td colspan="3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="sumberdata"
                                id="sumberdata_pasienbaru" value="Pasien Sendiri " checked>
                            <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="sumberdata"
                                id="sumberdata_pasienbaru" value="Keluarga">
                            <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Keluhan Utama</td>
                    <td>
                        <textarea type="text" class="form-control" name="keluhanutama"></textarea>
                    </td>
                    <td>Riwayat Alergi</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3 riwayatalergi" type="radio" name="riwayatalergi"
                                id="riwayatalergi" value="Tidak" skor="0" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3 riwayatalergi" skor="1" type="radio"
                                name="riwayatalergi" id="riwayatalergi" value="Ya">
                            <label class="form-check-label" for="inlineRadio2">Ya</label>
                        </div>
                        <textarea type="text" class="form-control mt-2 " name="keteranganriwayat_alergi" id="keteranganriwayat_alergi"
                            placeholder="Ketik riwayat alergi jika ada ...">Tidak ada</textarea>
                </td>
            </tr>
            <tr>
                <td>Riwayat Penyakit Dahulu</td>
                <td>
                    <textarea type="text" class="form-control" name="riwayatpenyakit" placeholder="Ketik riwayat penyakit dahulu jika ada ..."></textarea>
                    </td>
                    <td>Riwayat Obat Yang diminum</td>
                    <td>
                        <textarea type="text" class="form-control" name="riwayatobat"
                            placeholder="Ketik riwayat obat yang diminum jika ada ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Pemeriksaan Fisik</td>
                    <td colspan="3">
                        <textarea type="text" class="form-control" name="pemeriksaanfisik" placeholder="Ketik hasil pemeriksaan fisik ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td colspan="3">
                        <textarea type="text" class="form-control" name="diagnosa" placeholder="Ketik diagnosa ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Rencana Terapi</td>
                    <td colspan="3">
                        <textarea type="text" class="form-control" name="rencanaterapi" placeholder="Ketik rencana terapi ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Rencana Pemeriksaan Penunjang</td>
                    <td colspan="3">
                        <textarea type="text" class="form-control" name="rencanapemeriksaanpenunjang"
                            placeholder="Ketik rencana pemeriksaan penunjang ..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Dirujuk / Konsul</td>
                    <td colspan="3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3 dirujuk" skor="0" type="radio"
                                name="dirujuk" id="dirujuk" value="Tidak ada" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak ada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3 dirujuk" skor="1" type="radio"
                                name="dirujuk" id="dirujuk" value="gizi klinik">
                            <label class="form-check-label" for="inlineRadio1">Gizi Klinik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3 dirujuk" skor="2" type="radio"
                                name="dirujuk" id="dirujuk" value="rehab medis">
                            <label class="form-check-label" for="inlineRadio2">Rehab medis</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3 dirujuk" skor="3" type="radio"
                                name="dirujuk" id="dirujuk" value="tim nyeri">
                            <label class="form-check-label" for="inlineRadio1">Tim nyeri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3 dirujuk" skor="4" type="radio"
                                name="dirujuk" id="dirujuk" value="edukasi">
                            <label class="form-check-label" for="inlineRadio2">Edukasi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3 dirujuk" skor="5" type="radio"
                                name="dirujuk" id="dirujuk" value="Lain-lain">
                            <label class="form-check-label" for="inlineRadio2">Lain-lain</label>
                        </div>
                        <textarea type="text" class="form-control mt-2" name="ketdirujuk" id="ketdirujuk" placeholder="Keterangan ...">Tidak ada</textarea>
                    </td>
                </tr>
            </table>
            <table style="font-family:calibri" class="table text-md text-bold">
                <thead class="bg-secondary">
                    <th>Tanggal dan jam selesei assesmen</th>
                    <th>Nama dan tanga tangan DPJP</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p style="font-size: 20px">{{ $now }}</p>
                        </td>
                        <td>
                            <div id="signature-pad">
                                <div
                                    style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
                                    <div id="note" onmouseover="my_function();">tulis tanda tangan didalam box
                                        ...
                                    </div>
                                    <canvas id="the_canvas" width="350px" height="100px"></canvas>
                                </div>
                                <div style="margin:10px;">
                                    <input hidden type="" id="signature" name="signature">
                                    <button type="button" id="clear_btn" class="btn btn-danger"
                                        data-action="clear"><span class="glyphicon glyphicon-remove"></span>
                                        Clear</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ strtoupper(auth()->user()->name) }}</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success float-right mt-3 simpanrm03">simpan</button>
        </form>
    </div>
</div>
<script>
    $(function() {
        $(".datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });    
    $(document).ready(function() {
        $(".simpanrm03").click(function() {
            //             riwayatalergi
            // keteranganriwayat_alergi
            // dirujuk
            // ketdirujuk

            alergipasien = $('#riwayatalergi:checked').val()
            dirujuk = $('#dirujuk:checked').val()
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
            var data = $('.simpanrm3').serializeArray();
            kodekunjungan = $('#kodekunjungan').val()
            rm = $('#nomorrm').val()
            counter = $('#counter').val()
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
                    counter
                },
                url: '<?= route('simpanrm03') ?>',
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
        $(".riwayatalergi").click(function() {
            skor = $(this).attr('skor')
            if (skor == 1) {
                document.getElementById("keteranganriwayat_alergi").focus();
                $('#keteranganriwayat_alergi').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'Apakah pasien memiliki alergi???',
                    text: 'Silahkan lengkapi keterangan alergi pasien',
                    footer: ''
                })
            } else {
                $('#keteranganriwayat_alergi').val('tidak ada')
            }
        });
        $(".dirujuk").click(function() {
            skor = $(this).attr('skor')
            if(skor == 0){
                $('#ketdirujuk').val('Tidak ada')
            }
            else if (skor == 1) {
                document.getElementById("ketdirujuk").focus();
                $('#ketdirujuk').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'apakah pasien akan di rujuk ke bagian Gizi klinik??',
                    text: 'lengkapilah keterangan dibawah ini........',
                    footer: ''
                })
            } else if(skor == 2 ){
                document.getElementById("ketdirujuk").focus();
                $('#ketdirujuk').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'apakah pasien akan di rujuk ke bagian Rehab Medis??',
                    text: 'lengkapilah keterangan dibawah ini........',
                    footer: ''
                })
            }else if(skor == 3){
                document.getElementById("ketdirujuk").focus();
                $('#ketdirujuk').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'apakah pasien akan di rujuk ke bagian Tim nyeri??',
                    text: 'lengkapilah keterangan dibawah ini........',
                    footer: ''
                })
            }else if(skor == 4){
                document.getElementById("ketdirujuk").focus();
                $('#ketdirujuk').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'apakah pasien akan di rujuk ke bagian Edukasi??',
                    text: 'lengkapilah keterangan dibawah ini........',
                    footer: ''
                })
            }else if(skor == 5){
                document.getElementById("ketdirujuk").focus();
                $('#ketdirujuk').val('')
                Swal.fire({
                    icon: 'warning',
                    title: 'Isi keterangan dirujuk !',
                    text: 'lengkapilah keterangan dibawah ini........',
                    footer: ''
                })
            }
            else {
                $('#ketdirujuk').val('')
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
