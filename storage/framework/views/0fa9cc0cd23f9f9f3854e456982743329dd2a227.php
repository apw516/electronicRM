<table id="datapasien" class="table table-sm text-sm table-bordered table-hover">
    <thead>
        <th hidden>Kode kunjungan</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>alamat</th>
        <th>Keterangan</th>
        <th hidden>Unit</th>
        <th>Poliklinik Asal</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="pilihpasien toastsDefaultSuccess" nomor-rm="<?php echo e($p->no_rm); ?>" nama="<?php echo e($p->nama); ?>" kodekunjungan="<?php echo e($p->kode_kunjungan); ?>" alamat="<?php echo e($p->alamat); ?>" counter="<?php echo e($p->counter); ?>" umur="<?php echo e($p->umur); ?>" unit="<?php echo e($p->unit); ?>" tglmasuk="<?php echo e($p->tgl_masuk); ?>">
            <td hidden><?php echo e($p->kode_kunjungan); ?></td>
            <td> 
            <?php if($p->kj == NULL): ?>    
            <span class="right badge badge-danger">Belum diisi</span>
            <?php else: ?>
            <span class="right badge badge-success">Sudah diisi</span>
            <?php endif; ?>
            <?php echo e($p->tgl_masuk); ?>

            </td>
            <td><?php echo e($p->no_rm); ?></td>
            <td><?php echo e($p->nama); ?></td>
            <td><?php echo e($p->umur); ?> tahun</td>
            <td class="text-xxs"><?php echo e($p->alamat); ?></td>
            <td class="text-xxs"><?php if($p->data_erm == 0): ?><button class="badge badge-danger">tidak ada berkas erm</button> <?php endif; ?></td>
            <td hidden><?php echo e($p->unit); ?></td>
            <td><?php echo e($p->asalunit); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<script>
    $(function() {
        $("#datapasien").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $('#datapasien').on('click', '.pilihpasien', function() {
        spinner = $('#loader2');
        spinner.show();
        rm = $(this).attr('nomor-rm')
        nama = $(this).attr('nama')
        alamat = $(this).attr('alamat')
        kodekunjungan = $(this).attr('kodekunjungan')
        unit = $(this).attr('unit')
        tglmasuk = $(this).attr('tglmasuk')
        counter = $(this).attr('counter')
        umur = $(this).attr('umur')
        $(".pasienterpilih").slideToggle("slow");
        document.getElementById("tabelpasien").style.display = "none";
        // $('#tabelpasien').attr('hidden',true)       
        $.ajax({
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                rm,
                nama,
                alamat,
                kodekunjungan,
                unit,
                tglmasuk,
                umur,
                counter
            },
            url: '<?= route('ermform') ?>',
            error: function(data) {
                spinner.hide();
                alert('error')
            },
            success: function(response) {
                spinner.hide();
                $('.pasienterpilih').html(response)
            }
        });
    });
</script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm/datapasien.blade.php ENDPATH**/ ?>