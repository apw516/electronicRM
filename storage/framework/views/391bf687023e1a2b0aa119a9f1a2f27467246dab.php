<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="margin-top:130px">
        <div id="tabelpasien" class="container" >
            <p class="text-lg text-bold">Data Pasien</p>
            <table id="datapasien" class="table table-sm text-xs table-bordered table-hover">
                <thead>
                    <th>Kode kunjungan</th>
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>alamat</th>
                    <th>Unit</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                    <tr class="pilihpasien toastsDefaultSuccess" nomor-rm="<?php echo e($p->no_rm); ?>" nama="<?php echo e($p->nama); ?>" kodekunjungan="<?php echo e($p->kode_kunjungan); ?>" alamat="<?php echo e($p->alamat); ?>" counter="<?php echo e($p->counter); ?>"umur="<?php echo e($p->umur); ?>" unit="<?php echo e($p->unit); ?>" tglmasuk = "<?php echo e($p->tgl_masuk); ?>">
                        <td><?php echo e($p->kode_kunjungan); ?></td>
                        <td><?php echo e($p->no_rm); ?></td>
                        <td><?php echo e($p->nama); ?></td>
                        <td><?php echo e($p->umur); ?> tahun</td>
                        <td><?php echo e($p->alamat); ?></td>
                        <td><?php echo e($p->unit); ?></td>
             
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div style="display:none" id="pasienterpilih" class="card pasienterpilih">
            
        </div>
        <!-- /.card -->
    </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('semeru.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\semerusmart2\resources\views/erm/index.blade.php ENDPATH**/ ?>