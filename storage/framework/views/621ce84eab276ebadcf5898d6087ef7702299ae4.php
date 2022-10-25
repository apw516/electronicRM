
<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="margin-top:130px">
        <div id="tabelpasien" class="container" >
            <p class="text-lg text-bold">Data Pasien</p>
            <table id="datapasien" class="table table-sm text-xs table-bordered table-hover">
                <thead>
                    <th hidden>Kode kunjungan</th>
                    <th>Tanggal Masuk</th>
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>alamat</th>
                    <th>Poliklinik Asal</th>
                    <th hidden>unit</th>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

        <div style="display:none" id="pasienterpilih" class="card pasienterpilih">
            
        </div>
        <!-- /.card -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('erm2.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm2/index2.blade.php ENDPATH**/ ?>