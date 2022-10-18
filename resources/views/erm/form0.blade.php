<div class="card card-info card-outline scroll text-xs">
    <div class="card-header">
        <p class="card-title">PASIEN LAMA</p>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
    <div class="card-body scroll">


        <div class="container">
            <div class="card-body">
                <center>
                    <label>Tanggal Kunjungan dan jam : {{ $start }}</label>

                    <label>Tanggal dan jam Pengkajian : {{ $start }} </label><br>

                </center>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                            <div class="col-sm-5">
                                <table class="table table-sm">
                                    <tr style="border: none;">
                                        <td style="border: none;" rowspan="2">Sumber Data </td>
                                        <td style="border: none;"><input id="pasiensendiri" type="checkbox" value="pasien sendiri"> Pasien Sendiri/Autoanamnese </td>
                                    </tr>
                                    <tr style="border: none;">

                                        <td style="border: none;"><input id="keluarga" type="checkbox" value="keluarga"> Keluarga / Alloanamnessa </td>


                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h4>Keluhan Utama :</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control col-sm-5" placeholder="Ketik nama tindakan medis ..." id="keluhanutama" aria-label="Recipient's username" aria-describedby="button-addon2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <center>
                    <h4>Tanda-Tanda Vital</h4>
                </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-warning card-outline">
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <table class="table table-sm">
                                        <tr style="border: none;">
                                            <td style="border: none;">Tekanan Darah </td>
                                            <td style="border: none;">mmHg </td>
                                            <td style="border: none;">Frekuensi Nadi</td>
                                            <td style="border: none;">x/menit</td>
                                        </tr>
                                        <tr style="border: none;">
                                            <td style="border: none;">Frekuensi Napas</td>
                                            <td style="border: none;">x/menit</td>
                                            <td style="border: none;">Suhu</td>
                                            <td style="border: none;">°C</td>
                                        </tr>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="card-body">
                <center>
                    <h4>Status Fungsional</h4>
                </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-warning card-outline">
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <table class="table table-sm">
                                        <tr style="border: none;">
                                            <td style="border: none;" rowspan="2">Penggunaan Alat Bantu </td>
                                            <td style="border: none;"><input value="tidak" id="tidak" type="checkbox" > Tidak </td>
                                            <td style="border: none;"><input value="tongkat" id="tongkat" type="checkbox" > Tongkat </td>
                                            <td style="border: none;"><input value="kursiroda" id="kursiroda" type="checkbox" > Kursi Roda</td>
                                        </tr>
                                        <tr style="border: none;">
                                            <td style="border: none;" rowspan="2">Cacat Tubuh </td>
                                            <td style="border: none;"><input value="tidakcacat" id="tidakcacat" type="checkbox"> Tidak </td>
                                            <td style="border: none;"><input value="adacacat" type="checkbox" id="adacacat"> Ada, Sebutkan <input id="sebutkan" type="text"> </td>

                                        </tr>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4>DIAGNOSA KEPERAWATAN</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-warning card-outline">
                            <div class="card-body">
                                <div class="tab-pane" id="settings">
                                    <div class="input-group mb-3">
                                        <input  type="text" class="form-control col-sm-5" placeholder="Ketik nama tindakan medis ..." id="diagnosaperawat" aria-label="Recipient's username" aria-describedby="button-addon2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4>RENCANA KEPERAWATAN</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-danger card-outline">
                                <div class="card-body">
                                    <div class="tab-pane" id="settings">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control col-sm-5" placeholder="Ketik nama tindakan medis ..." id="rencanaperawatan" aria-label="Recipient's username" aria-describedby="button-addon2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>TINDAKAN KEPERAWATAN</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <div class="tab-pane" id="settings">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control col-sm-5" placeholder="Ketik nama tindakan medis ..." id="tindakanperawat" aria-label="Recipient's username" aria-describedby="button-addon2">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>EVALUASI KEPERAWATAN</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-success card-outline">
                                        <div class="card-body">
                                            <div class="tab-pane" id="settings">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control col-sm-5" placeholder="Ketik nama tindakan medis ..." id="evaluasiperawat" aria-label="Recipient's username" aria-describedby="button-addon2">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">

        <tr>
            <th class="text-center">Tanggal dan Jam Selesai Asesmen</th>
            <th class="text-center">Nama Perawat</th>
            <th class="text-center">Tanda Tangan</th>

        </tr>
        <td width="400px" align="center" value="{{ $start }} ">{{ $start }}</td>
        <td align="center" value="{{ auth()->user()->nama }}">{{ auth()->user()->nama }}</td>
        <td width="600px" align="center"></td>

    </table>
    <button class="btn btn-danger float-right ml-2">Batal</button>
    <button id="pasienlama" onclick="pasienlama()" class="btn btn-success float-right">Simpan</button>
</div>

</div>
</div>

<script>
    function pasienlama(){
        $("#pasienlama").click(function() {
            spinner = $('#loader');
            spinner.show();
            pasiensendiri = $("#pasiensendiri:checked").val();
            keluarga = $("#keluarga:checked").val();
            keluhanutama = $("#keluhanutama").val();
            tidak = $("#tidak:checked").val();
            tongkat = $("#tongkat:checked").val();
            kursiroda = $("#kursiroda:checked").val();
            tidakcacat = $("#tidakcacat:checked").val();
            adacacat = $("#adacacat:checked").val();
            diagnosaperawat = $("#diagnosaperawat").val();
            rencanaperawatan = $("#rencanperawata").val();
            tindakanperawat = $("#tindakanperawat").val();
            evaluasiperawat = $("#evaluasiperawat").val();

            $.ajax({
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    pasiensendiri,
                    keluarga,
                    keluhanutama,
                    tidak,
                    tongkat,
                    kursiroda,
                    tidakcacat,
                    adacacat,
                    diagnosaperawat,
                    rencanaperawatan,
                    tindakanperawat,
                    evaluasiperawat
                },
                url: "{{ route('#') }}",
                error: function(data) {
                    spinner.hide();
                    alert('error!')
                },
                success: function(response) {
                    spinner.hide();
                   alert('data berhasil di tambah')
                }
            })
        });
    }
</script>