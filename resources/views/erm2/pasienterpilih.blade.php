<div class="container-fluid text-xs">
    <div class="row mt-3">
        <div class="col-md-1">
            <h2>
                <button class="btn btn-sm btn-danger" onclick="batalpilih()"><i
                        class="bi bi-backspace mr-2"></i>Kembali</button>
            </h2>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-success card-outline">
                    <table style="font-family:calibri" class="table table-sm text-md">
                        <tr>
                            <td>Frekuensi nafas</td>
                            <td>{{ $ass_per[0]->ttv_freq_napas }} / menit</td>
                        </tr>
                        <tr>
                            <td>Tekanan darah</td>
                            <td>{{ $ass_per[0]->ttv_tekanan_darah }}</td>
                        </tr>
                        <tr>
                            <td>Frekuensi nadi</td>
                            <td>{{ $ass_per[0]->ttv_freq_nadi }}</td>
                        </tr>
                        <tr>
                            <td>Riwayat Psikologis</td>
                            <td>{{ $ass_per[0]->riwayat_Psikologis }}</td>
                        </tr>
                        <tr>
                            <td>Keluhan Utama</td>
                            <td>{{ $ass_per[0]->keluhan_utama }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table style="font-family:calibri"
                class="table table-md text-md table-striped table-hover shadow-sm table-bordered">
                <thead class="bg-info">
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $rm }}</td>
                        <td>{{ $nama }}</td>
                        <td>{{ $umur }} Tahun</td>
                        <td>{{ $alamat }}</td>
                        <input hidden type="text" id="counter" value="{{ $counter }}">
                        <input hidden type="text" id="nama" value="{{ $nama }}">
                        <input hidden type="text" id="unit" value="{{ $unit }}">
                        <input hidden type="text" id="umur" value="{{ $umur }}">
                        <input hidden type="text" id="alamat" value="{{ $alamat }}">
                        <input hidden type="text" id="tglmasuk" value="{{ $tglmasuk }}">
                        <input hidden type="text" id="kodekunjungan" value="{{ $kodekunjungan }}">
                        <input hidden type="text" id="nomorrm" value="{{ $rm }}">
                        <input hidden type="text" id="kelas" value="{{ $kelas }}">
                        <input hidden type="text" id="tglkunjugan" value="{{ $tglkunjugan }}">
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="font-family:calibri" class="card-header p-2 bg-bg-light">
        <ul class="nav nav-pills text-md text-light">
            <li class="nav-item"><a class="nav-link text-bold tampilriwayat" href="#activity"
                    nomorrm="{{ $rm }}" data-toggle="tab">Riwayat Pelayanan / Tindakan
                    Medis</a>
            </li>
            <li class="nav-item"><a class="nav-link tampilcppt text-bold" href="#cppt" data-toggle="tab"
                    nomorrm="{{ $rm }}">CPPT</a></li>
            <li class="nav-item"><a class="nav-link  active text-bold" href="#timeline" data-toggle="tab">E - Form</a></li>
            <li class="nav-item"><a class="nav-link text-bold" href="#settings" data-toggle="tab">Tindakan Medis</a>
            </li>
            {{-- <li class="nav-item"><a class="nav-link text-dark text-bold" href="#settings" data-toggle="tab">Tindakan Medis & Order
                Layanan</a></li> --}}
        </ul>
    </div>
    <div style="font-family:calibri" class="card-body scroll">
        <div class="tab-content">
            <div class=" tab-pane" id="activity">
                <div class="post">
                    <div class="tampilriwayatlayan">

                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="cppt">
                <div class="viewcppt">
                </div>
            </div>
            <div class="tab-pane active" id="timeline">
                <div style="font-family:calibri" class="form-group">
                    <select style="font-family:calibri" class="custom-select form-control-border text-md" id="jenisform"
                        onchange="gantiform()">
                        <!-- <option>--- Silahkan Pilih Jenis Form ---</option> -->
                        <option value="">-- Pilih Form --</option>
                        <option value="3">RM.03.01-RJ (ASSESMEN AWAL MEDIS )</option>
                        <option value="radiologi">Form Order Radiologi</option>
                        <option value="laboratorium">Form Order Laboratorium</option>
                    </select>
                </div>
                <div class="viewform">
                    <h5 class="text-danger">Tidak ada form yang dipilih ...</h5>
                </div>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card mt-3">
                            <div class="card-header bg-info">Silahkan Pilih Tindakan</div>
                            <div class="card-body scroll">
                                <table id="tabeltindakan" class="table table-sm table-bordered table-hover text-xs">
                                    <thead>
                                        <th>Nama tindakan</th>
                                        <th>Tarif</th>
                                    </thead>
                                    <tbody class="scroll">
                                        @foreach ($tarif as $t)
                                            <tr class="pilihtindakan" namatindakan="{{ $t->Tindakan }}"
                                                tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                                <td>{{ $t->Tindakan }}</td>
                                                <td> RP. {{ $t->tarif }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header bg-success">Tindakan / Layanan Pasien</div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" class="formtindakan">
                                <div class="input_fields_wrap">
                                    <div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih dokter</label>
                                        <select class="form-control" id="dokterpemeriksa">
                                            @foreach ($dokter as $d)
                                                <option value="{{ $d->kode_dokter }}">{{ $d->nama_dokter }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="button" class="btn btn-warning mb-2 simpanlayanan"
                                        id="simpanlayanan">Simpan Tindakan</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p>pilih layanan untuk pasien</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
<script>
    $(function() {
        $('#tabeltindakan').DataTable({
            "responsive": true,
            "lengthChange": false,
            "pageLength": 20,
            "searching": true,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        })
    })
    $(function() {
        $("#tabelpasienterpilih").DataTable({
            "responsive": true,
            "lengthChange": false,
            "pageLength": 5,
            "searching": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    function gantiform() {
        spinner = $('#loader2');
        spinner.show();
        id = $('#jenisform').val()
        tglmasuk = $('#tglmasuk').val()
        nomorrm = $('#nomorrm').val()
        nama = $('#nama').val()
        unit = $('#unit').val()
        alamat = $('#alamat').val()
        umur = $('#umur').val()
        counter = $('#counter').val()
        tglkunjugan = $('#tglkunjugan').val()
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                id,
                tglmasuk,
                nomorrm,
                nama,
                unit,
                alamat,
                umur,
                tglkunjugan,
                counter
            },
            url: '<?= route('pilihform2') ?>',
            error: function(data) {
                spinner.hide();
                alert('error')
            },
            success: function(response) {
                spinner.hide();
                $('.viewform').html(response)
            }
        });
    }
    $(".tampilcppt").click(function() {
        nomorrm = $(this).attr('nomorrm')
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                nomorrm
            },
            url: '<?= route('tampilcppt2') ?>',
            error: function(data) {
                spinner.hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {
                spinner.hide();
                $('.viewcppt').html(response)
            }
        });
    });
    $(".tampilriwayat").click(function() {
        nomorrm = $(this).attr('nomorrm')
        counter = $('#cek_counter').val()
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                nomorrm,
                counter
            },
            url: '<?= route('tampilriwayat') ?>',
            error: function(data) {
                spinner.hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {
                spinner.hide();
                $('.tampilriwayatlayan').html(response)
            }
        });
    });

    function carilayanan() {
        spinner = $('#loader');
        spinner.show();
        layanan = $('#inputLayanan').val();
        $.ajax({
            type: 'post',
            url: '<?= route('carilayanan') ?>',
            /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
            data: {
                _token: "{{ csrf_token() }}",
                layanan: layanan
            },
            /* memanggil fungsi getDetail dan mengirimkannya */
            success: function(response) {
                $('#tabelLayanan').html(response);
                /* menampilkan data dalam bentuk dokumen HTML */
            }
        });
    }
    $('#tabeltindakan').on('click', '.pilihtindakan', function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var x = 1; //initlal text box count
        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        // e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"></div><div class="form-group col-md-3"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-2"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });


    $(document).ready(function() {
        $(".simpanlayanan").click(function() {
            var data = $('.formtindakan').serializeArray();
            var kodekunjungan = $('#kodekunjungan').val()
            var dokterpemeriksa = $('#dokterpemeriksa').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    data: JSON.stringify(data),
                    kodekunjungan: kodekunjungan,
                    dokterpemeriksa: dokterpemeriksa,
                },
                url: '<?= route('simpanlayanan') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah ...',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
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
