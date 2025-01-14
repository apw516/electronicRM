<table style="font-family:calibri" id="datapasien2" class="table table-sm text-xs table-bordered table-hover">
    <thead>
        <th hidden>Kode kunjungan</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>alamat</th>
        <th>Poliklinik Asal</th>
        <th>Status</th>
        <th hidden>unit</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="<?php if($p->kjper != null): ?> pilihpasien toastsDefaultSuccess <?php endif; ?> "
                nomor-rm="<?php echo e($p->no_rm); ?>" tglkunjugan="<?php echo e($p->tgl_masuk); ?>" nama="<?php echo e($p->nama); ?>"
                kodekunjungan="<?php echo e($p->kode_kunjungan); ?>" alamat="<?php echo e($p->alamat); ?>"
                counter="<?php echo e($p->counter); ?>"umur="<?php echo e($p->umur); ?>" unit="<?php echo e($p->unit); ?>"
                tglmasuk=<?php echo e($p->tgl_masuk); ?>>
                <td hidden><?php echo e($p->kode_kunjungan); ?></td>
                <td><?php echo e($p->tgl_masuk); ?></td>
                <td><?php echo e($p->no_rm); ?></td>
                <td><?php echo e($p->nama); ?></td>
                <td><?php echo e($p->umur); ?> tahun</td>
                <td><?php echo e($p->alamat); ?></td>
                <td hidden><?php echo e($p->unit); ?></td>
                <td><?php echo e($p->asalunit); ?></td>
                <td> <?php if($p->kjper == NULL): ?>    
            <span class="right badge badge-danger">Assesmen keperawatan belum diisi ...</span>
            <?php else: ?>
            <span class="right badge badge-success">Assesmen keperawatan sudah diisi ...</span>
            <?php endif; ?>   </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<script>
    $(function() {
        $("#datapasien2").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 8,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $('#datapasien2').on('click', '.pilihpasien', function() {
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
        tglkunjugan = $(this).attr('tglkunjugan')
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
                counter,
                tglkunjugan
            },
            url: '<?= route('ermform2') ?>',
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
</script><?php /**PATH C:\xampp\htdocs\electronicRM\resources\views/erm2/datapasien.blade.php ENDPATH**/ ?>