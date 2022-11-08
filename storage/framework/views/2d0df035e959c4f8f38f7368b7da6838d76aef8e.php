<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="<?php echo e(asset('public/semeru/dist/img/user4-128x128.jpg')); ?>" alt="User profile picture">
          </div>

          <h3 class="profile-username text-center"><?php echo e($nama); ?></h3>

          <p class="text-muted text-center">RM <?php echo e($rm); ?></p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Nomor RM</b> <a class="float-right"><?php echo e($pasien[0]->no_rm); ?></a>
            </li>
            <li class="list-group-item">
              <b>Nomor KTP</b> <a class="float-right"><?php echo e($pasien[0]->nik_bpjs); ?></a>
            </li>
            <li class="list-group-item">
              <b>Nomor BPJS</b> <a class="float-right"><?php echo e($pasien[0]->no_Bpjs); ?></a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- About Me Box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Riwayat Kunjungan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body scroll">
          <?php $__currentLoopData = $riwayat_kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <strong><i class="fas fa-book mr-1"></i> <?php echo e($a->tgl_masuk); ?> | <?php echo e($a->nama_unit); ?></strong>

          <p class="text-muted">
            <?php echo e($a->dokter); ?> | <?php echo e($a->nama_penjamin); ?> <button kode="<?php echo e($a->kode_kunjungan); ?>" class="badge badge-info lihatresume">Lihat Resume</button>
          </p>

          <hr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <h5 class="text-bold mb-3"><?php echo e($now); ?></h5>
      <?php if($cek_form != 0): ?>
      <div class="card card-success collapsed-card">
        <div class="card-header">
          <h3 class="card-title">Form</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" onclick="editdataform()"><i class="fas fa-plus"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
      </div>
      <?php else: ?>
        <h5 class="text-danger mb-3">Anda belum mengisi form assesmen awal !</h5>
      <?php endif; ?>
      <div class="card card-success collapsed-card">
        <div class="card-header">
          <h3 class="card-title">Order Layanan Penunjang</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
              <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card card-dark">
                  <div class="card-header text-md"> <?php echo e($o->nama_unit); ?>| <?php echo e($o->kode_layanan_header); ?></div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <th>Nama Layanan</th>
                        <th>Jumlah</th>
                        <th>Diskon dokter</th>
                        <th>Diskon Layanan</th>
                        <th>Tarif</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $orderdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $od): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($od->kode_layanan_header == $o->kode_layanan_header): ?>
                            <tr>
                              <td><?php echo e($od->NAMA_TARIF); ?></td>
                              <td><?php echo e($od->jumlah_layanan); ?></td>
                              <td><?php echo e($od->diskon_dokter); ?></td>
                              <td><?php echo e($od->diskon_layanan); ?></td>
                              <td><?php echo e($od->total_tarif); ?></td>
                              <td><?php echo e($od->total_layanan); ?></td>
                            </tr>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>

<!-- Modal -->
<div class="modal fade" id="modaleditform" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="editform">

        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modallihatresume" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Riwayat Resume Medis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="lihatresume_lama">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function editdataform() {
    spinner = $('#loader2');
    spinner.show();
    kodekunjungan = $('#kodekunjungan').val()
    tglmasuk = $('#tglmasuk').val()
    nomorrm = $('#nomorrm').val()
    $.ajax({
      type: 'post',
      data: {
        _token: "<?php echo e(csrf_token()); ?>",
        kodekunjungan,
        tglmasuk,
        nomorrm
      },
      url: '<?= route('editform') ?>',
      error: function(data) {
        spinner.hide();
        alert('error')
      },
      success: function(response) {
        spinner.hide();
        $('#modaleditform').modal('show')
        $('.editform').html(response)
      }
    });
  }
  $(".lihatresume").click(function() {
    kode = $(this).attr('kode')
    spinner = $('#loader2');
    spinner.show();
    $.ajax({
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                kode
            },
            url: '<?= route('tampilresume_lama') ?>',
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
                $('#modallihatresume').modal('show')
                $('.lihatresume_lama').html(response)
            }
        });
  })
</script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm/resume.blade.php ENDPATH**/ ?>