 <?php $__currentLoopData = $periode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="card card-light collapsed-card">
         <div class="card-header">
             <h3 class="card-title"><?php echo e($p->tanggal_masuk); ?></h3>
             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                 </button>
             </div>
             <!-- /.card-tools -->
         </div>
         <!-- /.card-header -->
         <div class="card-body scroll2">
             <H5 class="text-bold text-danger">Riwayat Pelayanan / Tindakan Medis</H5>
             <table style="font-family:calibri" class="table table-sm text-md">
                 <thead>
                     <th>TGL MASUK</th>
                     <th>TGL KELUAR</th>
                     <th>COUNTER</th>
                     <th>NAMA PASIEN</th>
                     <th>NAMA TARIF</th>
                     <th>PENJAMIN</th>
                     <th>PELAYANAN</th>
                     <th>UNIT</th>
                     <th>DOKTER</th>
                 </thead>
                 <tbody>
                     <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($p->tanggal_masuk == $r->TGL_MASUK): ?>
                             <tr>
                                 <td><?php echo e($r->TGL_MASUK); ?></td>
                                 <td><?php echo e($r->TGL_KELUAR); ?></td>
                                 <td><?php echo e($r->KONTER); ?></td>
                                 <td><?php echo e($r->NAMA_PX); ?></td>
                                 <td><?php echo e($r->NAMA_TARIF); ?></td>
                                 <td><?php echo e($r->PENJAMIN); ?></td>
                                 <td><?php echo e($r->SEQ_1); ?></td>
                                 <td><?php echo e($r->NAMA_UNIT); ?></td>
                                 <td><?php echo e($r->NAMA_PARAMEDIS); ?></td>
                             </tr>
                         <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </tbody>
             </table>
         </div>
         <!-- /.card-body -->
     </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm/riwayatpelayanan.blade.php ENDPATH**/ ?>