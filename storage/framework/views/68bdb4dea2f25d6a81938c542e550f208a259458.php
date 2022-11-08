<div class="row">
    <div class="col-md-5">
        <table id="tabellayanan" class="table table-md table-hover table-stripped">
            <thead class="bg-info">
                <th>kode</th>
                <th>tindakan</th>
                <th>tarif</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="pilihlayanan" namatindakan="<?php echo e($t->Tindakan); ?>" tarif="<?php echo e($t->tarif); ?>" kode="<?php echo e($t->kode); ?>">
                    <td><?php echo e($t->kode); ?></td>
                    <td><?php echo e($t->Tindakan); ?></td>
                    <td><?php echo e($t->tarif); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header bg-success">Tindakan / Layanan Pasien</div>
            <div class="card-body">
                <form action="" method="post" class="formtindakan">
                    <div class="input_fields_wrap">
                        <div>
                        </div>
                        <div class="form-group">
                            <input hidden type="text" class="form-control" id="jenisform2" name="jenisform2" value="<?php echo e($jenisform); ?>">
                            <input hidden type="text" class="form-control" id="unitujuan" name="unitujuan" value="<?php echo e($unittujuan); ?>">
                            <select disabled class="form-control" name="dokterpemeriksa" id="dokterpemeriksa">
                                <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($d->kode_dokter); ?>" <?php if( $d->kode_dokter == $dok_log ): ?> selected <?php endif; ?>><?php echo e($d->nama_dokter); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button type="button" class="btn btn-warning mb-2 simpanlayanan" id="simpanlayanan">Simpan Tindakan</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p>pilih layanan untuk pasien</p>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#tabellayanan").DataTable({
                "responsive": true,
                "lengthChange": false,
                "pageLength": 8,
                "searching": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        $('#tabellayanan').on('click', '.pilihlayanan', function() {
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
                    '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                    tarif +
                    '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
                );
                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                })
            }
        });
        $(".simpanlayanan").click(function() {
            var data = $('.formtindakan').serializeArray();
            var kodekunjungan = $('#kodekunjungan').val()
            var dokterpemeriksa = $('#dokterpemeriksa').val()
            var jenisform = $('#jenisform2').val()
            var unitujuan = $('#unitujuan').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    data: JSON.stringify(data),
                    kodekunjungan: kodekunjungan,
                    dokterpemeriksa: dokterpemeriksa,
                    jenisform,
                    unitujuan
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
    </script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm2/orderpenunjang.blade.php ENDPATH**/ ?>