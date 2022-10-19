<div class="card">
    <div class="card-header">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI ( CPPT )</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm table-bordered text-xs">
                    <thead>
                        <th>Tanggal / Jam</th>
                        <th>Profesi</th>
                        <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan dalam assesmen.</th>
                        <th>Tanggal / Jam</th>
                        <th>Profesi</th>
                        <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan dalam assesmen.</th>

                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ass_kep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->tgl_selesai); ?></td>
                            <td>Perawat Poli</td>
                            <td>
                                Sumber Data <?php echo e($d->sumber_data); ?> <br>
                                Keluhan Utama = <?php echo e($d->keluhan_utamaperawat); ?> <br>
                                tekanan darah = <?php echo e($d->ttv_tekanan_darah); ?> mmHg <br>
                                frekuensi nafas = <?php echo e($d->ttv_freq_napas); ?> X/menit<br>
                                frekuensi nadi = <?php echo e($d->ttv_freq_nadi); ?> X/menit <br>
                                suhu badan = <?php echo e($d->ttv_suhu); ?> °C<br><br>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-bold">Rencana Keperawatan</p>
                                        <?php echo e($d->rencana_perawat); ?>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-bold">Tindakan Keperawatan</p>
                                        <?php echo e($d->tindakan_perawat); ?>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-bold">Evaluasi Keperawatan</p>
                                        <?php echo e($d->evaluasi_perawat); ?>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">Tanda tangan perawat</div>
                                    <div class="card-body">

                                        <img src="<?php echo e($d->ttd_perawat); ?>" alt=""> <br>

                                    </div>
                                    <div class="card-footer"></div>
                                </div>
            </div>
            </td>
            <td><?php echo e($d->tglwaktu_selesai); ?></td>
            <td><?php echo e(strtoupper(auth()->user()->name)); ?></td>
            <td>
                Sumber Data <?php echo e($d->sumber_data); ?> <br>
                Keluhan Utama = <?php echo e($d->keluhan_utamadokter); ?> <br>
                Riwayat Penyakit = <?php echo e($d->riwayat_penyakit); ?> <br>
                Riwayat Alergi = <?php echo e($d->riwayat_alergi_0); ?> <?php echo e($d->riwayat_alergi_1); ?> <br>
                Pemeriksaan Fisik = <?php echo e($d->pemeriksaan_fisik); ?> <br>

               
             
                <div class="card">
                    <div class="card-body">
                        <p class="text-bold">Diagnosis</p>
                        <?php echo e($d->diagnosis); ?>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="text-bold">Rencana Terapi</p>
                        <?php echo e($d->rencana_terapi); ?>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="text-bold">Rencana Pemeriksaan Penunjang</p>
                        <?php echo e($d->rencana_pemeriksaan_penunjang); ?>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Tanda tangan Dokter</div>
                    <div class="card-body">

                        <img src="<?php echo e($d->signature); ?>" alt=""> <br>

                    </div>
                    <div class="card-footer"></div>
                </div>
        </div>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
</div>
</div>
</div><?php /**PATH C:\xampp\htdocs\semerusmart2\resources\views/erm/cppt.blade.php ENDPATH**/ ?>