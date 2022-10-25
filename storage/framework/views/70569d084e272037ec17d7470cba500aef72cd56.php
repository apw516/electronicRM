<div class="card scroll">
    <div class="card-header text-bold">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI ( CPPT )
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    
                <table class="table table-md text-md table-bordered ">
                    <thead class="bg-warning">
                        <th>Tanggal / Jam Assesmen Perawat/Bidan</th>
                        <th >Profesi</th>
                        <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan dalam assesmen.</th>
                        <th>Tanggal / Jam Assesmen DPJP</th>
                        <th width="800px">DPJP</th>
                        <th class="text-center">Intruksi tenaga kesehatan termasuk Pascaa Bedah/Prosedur (Intruksi ditulis dengan rinci dan jelas</th>

                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ass_kep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->tgl_selesai); ?></td>
                            <td>Perawat Poli</td>
                            <td>
                                Sumber Data = <?php echo e($d->sumber_data); ?> <br>
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
                                    <div class="card-header text-bold">Tanda tangan perawat</div>
                                    <div class="card-body">

                                        <img src="<?php echo e($d->ttd_perawat); ?>" alt=""> <br>

                                    </div>
                                    <div class="card-footer"></div>
                                </div>
            </div>
            </td>
            <td><?php echo e($d->tglwaktu_selesai); ?></td>
            <td><?php echo e($d->nama_dokter); ?></td>
            <td><?php if($d->kode_kunjungan != null): ?> 
                Sumber Data = <?php echo e($d->sumber_data); ?> <br>
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
                    <div class="card-header text-bold">Tanda tangan Dokter</div>
                    <div class="card-body">

                        <img src="<?php echo e($d->signature); ?>" alt=""> <br>

                    </div>
                    <div class="card">
                        <div class="card-body">
                        <p class="text-bold text-center"> Waled, <?php echo e($d->tglwaktu_selesai); ?>

                            </p>
                            <p class="text-bold text-center"> <?php echo e($d->nama_dokter); ?>

                            </p>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
        </div>
        <?php else: ?> <p class="text-danger">Dokter belum mengisi Assesmen awal medis</p>
        <?php endif; ?>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
 
</div><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm/cppt.blade.php ENDPATH**/ ?>