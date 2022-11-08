<div class="container-fluid text-xs">
    <div class="row mt-3">
        <div class="col-md-1">
            <h2>
                <button class="btn btn-sm btn-danger" onclick="batalpilih()"><i class="bi bi-backspace mr-2"></i>Kembali</button>
            </h2>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info" role="">
                <?php if($counter == 1): ?>
                <p class="text-bold text-sm"> Pasien baru , kunjungan pertama ! </p>
                <?php else: ?>
                <p class="text-bold text-sm"> Pasien lama, Kunjungan ke-<?php echo e($counter); ?> </p>
                <input type="text" hidden id="cek_counter" value="<?php echo e($counter); ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-8">
            <table style="font-family:calibri" class="table table-sm table-striped table-hover text-md shadow-sm table-bordered">
                <thead class="bg-info">
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($rm); ?></td>
                        <td><?php echo e($nama); ?></td>
                        <td><?php echo e($umur); ?> Tahun</td>
                        <td><?php echo e($alamat); ?></td>
                        <input hidden type="text" id="nama" value="<?php echo e($nama); ?>">
                        <input hidden type="text" id="unit" value="<?php echo e($unit); ?>">
                        <input hidden type="text" id="umur" value="<?php echo e($umur); ?>">
                        <input hidden type="text" id="alamat" value="<?php echo e($alamat); ?>">
                        <input hidden type="text" id="tglmasuk" value="<?php echo e($tglmasuk); ?>">
                        <input hidden type="text" id="kodekunjungan" value="<?php echo e($kodekunjungan); ?>">
                        <input hidden type="text" id="nomorrm" value="<?php echo e($rm); ?>">
                        <input hidden type="text" id="kelas" value="<?php echo e($kelas); ?>">
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="font-family:calibri" class="card-header p-2 text-md">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">E - Form</a></li>
            <li class="nav-item"><a class="nav-link resume" href="#resume" data-toggle="tab" nomorrm="<?php echo e($rm); ?>">Resume Medis</a></li>
            <li class="nav-item"><a class="nav-link tampilcppt" href="#cppt" data-toggle="tab" nomorrm="<?php echo e($rm); ?>">CPPT</a></li>
        </ul>
    </div>
    <div class="card-body ">
        <div class="tab-content">
            <div class="tab-pane" id="cppt">
                <div class="viewcppt">
                </div>
            </div>
            <div class="tab-pane" id="resume">
                <div class="viewresume">
                </div>
            </div>
            <div class="active tab-pane" id="timeline">
                <div style="font-family:calibri" class="form-group">
                    <select style="font-family:calibri" class="custom-select form-control-border text-md" id="jenisform" onchange="gantiform()">
                        <option value="">-- Pilih Form --</option>
                        <option value="1">RM.02.01-RJ / Pasien Dewasa</option>
                        <option value="3">RM.02.01-RJ / Pasien Anak</option>
                    </select>
                </div>
                <div class="viewform">
                    <h5 class="text-danger">Tidak ada form yang dipilih ...</h5>
                </div>
            </div>
        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
<div id="exampleModal" class="modal" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Silahkan isi form berikut ...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tampil-formnya">

                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
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
        $.ajax({
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                id,
                tglmasuk,
                nomorrm,
                nama,
                unit,
                alamat,
                umur,
            },
            url: '<?= route('pilihform') ?>',
            error: function(data) {
                spinner.hide();
                alert('error')
            },
            success: function(response) {
                spinner.hide();
                if (id != '') {
                    $('#exampleModal').modal('show')
                }
                $('.tampil-formnya').html(response)
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
                _token: "<?php echo e(csrf_token()); ?>",
                nomorrm
            },
            url: '<?= route('tampilcppt') ?>',
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

    $(".resume").click(function() {
        nomorrm = $(this).attr('nomorrm')
        tglmasuk = $('#tglmasuk').val()
        nama = $('#nama').val()
        unit = $('#unit').val()
        alamat = $('#alamat').val()
        kodekunjungan = $('#kodekunjungan').val()
        umur = $('#umur').val()
        counter = $('#cek_counter').val()
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                tglmasuk,
                nomorrm,
                kodekunjungan,
                nama,
                unit,
                alamat,
                umur,
                counter
            },
            url: '<?= route('tampilresume') ?>',
            error: function(data) {
                spinner.hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Oopss.....',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {
                spinner.hide();
                $('.viewresume').html(response)
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
                _token: "<?php echo e(csrf_token()); ?>",
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
                    _token: "<?php echo e(csrf_token()); ?>",
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
</script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm/pasienterpilih.blade.php ENDPATH**/ ?>