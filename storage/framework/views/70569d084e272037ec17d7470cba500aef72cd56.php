<div class="card">
    <div class="card-header text-md" style="font-family:calibri">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI ( CPPT )
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table style="font-family:calibri" class="table table-md table-bordered text-md">
                    <thead class="bg-secondary">
                        <th>Tanggal / Jam</th>
                        <th>Profesi</th>
                        <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis
                            dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan
                            dalam assesmen.</th>
                        <th class="text-center">Intruksi tenaga kesehatan termasuk Pasca Bedah/ Prosedur (intruksi ditulis dengan rinci dan jelas)</th>
                        <th class="text-center ">verifikasi</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ass_kep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="color:#0000FF">
                            <td><?php echo e($d->tgl_selesai); ?></td>
                            <td>Perawat Poli</td>
                            <td>
                                Sumber Data = <?php echo e($d->sumber_data_askep); ?> <br>
                                Keluhan Utama = <?php echo e($d->keluhan_utamaperawat); ?> <br>
                                tekanan darah = <?php echo e($d->ttv_tekanan_darah); ?> mmHg <br>
                                frekuensi nafas = <?php echo e($d->ttv_freq_napas); ?> X/menit<br>
                                frekuensi nadi = <?php echo e($d->ttv_freq_nadi); ?> X/menit <br>
                                suhu badan = <?php echo e($d->ttv_suhu); ?> °C<br><br>
                                
                            </td>
                            <td>
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
                            </td>
                            <td class="text-center">
                                <img width="200px" src="<?php echo e($d->ttd_perawat); ?>" alt=""> <br>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo e($d->tglwaktu_selesai); ?></td>
                            <td>Dokter Poli</td>
                            <td>
                                <?php if($d->kunjungan_2 != null): ?>
                                Sumber Data = <?php echo e($d->sumber_data_asmed); ?> <br>
                                Keluhan Utama = <?php echo e($d->keluhan_utamadokter); ?> <br>
                                Riwayat Penyakit = <?php echo e($d->riwayat_penyakit); ?> <br>
                                Riwayat Alergi = <?php echo e($d->riwayat_alergi_0); ?> <?php echo e($d->riwayat_alergi_1); ?> <br>
                                Pemeriksaan Fisik = <?php echo e($d->pemeriksaan_fisik); ?> <br>
                            </td>
                            <td>
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
                            </td>
                            <td>
                                        <img width="200px" src="<?php echo e($d->signature); ?>" alt=""> <br>
                                   
                                        <?php echo e($d->nama_dokter); ?>

                                        
                                   
                                <?php else: ?>
                                <H4>
                                    Dokter belum mengisi ...
                                </H4>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm/cppt.blade.php ENDPATH**/ ?>