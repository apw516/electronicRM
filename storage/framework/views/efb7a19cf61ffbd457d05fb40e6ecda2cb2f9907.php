<div class="card scroll">
  <div class="card-header text-md" style="font-family:calibri">RESUME RAWAT JALAN
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
    </div>
  </div>
  <div class="card">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h1>Profile Pasien</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center"><?php echo e($nama); ?></h3>

                <p class="text-muted text-center"></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Frekuensi Napas</b> <a class="float-right"><?php echo e($ass_kep[0]->ttv_freq_napas); ?>/ menit</a>
                  </li>
                  <li class="list-group-item">
                    <b>Frekuensi Nadi</b> <a class="float-right"><?php echo e($ass_kep[0]->ttv_freq_nadi); ?>x/menit</a>
                  </li>
                  <li class="list-group-item">
                    <b>Suhu</b> <a class="float-right"><?php echo e($ass_kep[0]->ttv_suhu); ?>°C</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tekanan Darah</b> <a class="float-right"><?php echo e($ass_kep[0]->ttv_tekanan_darah); ?>mmHG</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-address-card mr-1"></i> No Rekam Medis</strong>

                <p>
                  <?php echo e($pasien[0]->no_rm); ?>

                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p><?php echo e($alamat); ?></p>

                <hr>

                <strong><i class="fas fa-calendar mr-1"></i> Tanggal Lahir</strong>

                <p>
                  <?php echo e($pasien[0]->tgl_lahir); ?>

                </p>

                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#dokter" data-toggle="tab">Riwayat Pemeriksaan Dokter</a></li>
                  <li class="nav-item"><a class="nav-link" href="#perawat" data-toggle="tab">Riwayat Pemeriksaan Perawat/Bidan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="dokter">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                    
                        <img class="img-circle img-bordered-sm" src="public/img/logo_rs.png" alt="user image">
                        <span class="username">
                          <?php echo e($ass_awal[0]->nama_dokter); ?> <a href="#">(<?php echo e($unit); ?>)</a>
                        </span>
                        <span class="description">Shared publicly <?php echo e($ass_awal[0]->tglwaktu_selesai); ?> today</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="card">
                     
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Keluhan Utama</p>
                          <?php echo e($ass_awal[0]->keluhan_utama); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Diagnosis</p>
                          <?php echo e($ass_awal[0]->diagnosis); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Diagnosis</p>
                          <?php echo e($ass_awal[0]->riwayat_penyakit); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Pemeriksaan Fisik</p>
                          <?php echo e($ass_awal[0]->pemeriksaan_fisik); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Riwayat Alergi</p>
                          <?php echo e($ass_awal[0]->riwayat_alergi_0); ?>, <?php echo e($ass_awal[0]->riwayat_alergi_1); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Rencana Terapi</p>
                          <?php echo e($ass_awal[0]->rencana_terapi); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Rencana Pemeriksaan Penunjang</p>
                          <?php echo e($ass_awal[0]->rencana_pemeriksaan_penunjang); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-success">Rujuk</p>
                          <?php echo e($ass_awal[0]->dirujuk_ke); ?> <br>
                          Keterangan di rujuk :
                          <?php echo e($ass_awal[0]->keterangan_dirujuk); ?>

                        </div>
                      </div>

                      <p class="text-right"> 
                        <img width="200px" src="<?php echo e($ass_awal[0]->signature); ?>" alt=""> <br>

                      </p>

                    </div>
                    <!-- /.post -->

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="perawat">
                    <!-- The timeline -->
                    <div class="post">
                      <div class="user-block">
                    
                        <img class="img-circle img-bordered-sm" src="public/img/logo_rs.png" alt="user image">
                        <span class="username">
                          Perawat  <a href="#">(<?php echo e($unit); ?>)</a>
                        </span>
                        <span class="description">Shared publicly <?php echo e($ass_kep[0]->tgl_selesai); ?> today</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="card">
                     
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Keluhan Utama</p>
                          <?php echo e($ass_kep[0]->keluhan_utama); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Diagnosa</p>
                          <?php echo e($ass_kep[0]->diag_perawat); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Nyeri</p>
                          <?php echo e($ass_kep[0]->assesmen_nyeri); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Status Fungsi Tubuh</p>
                          <?php echo e($ass_kep[0]->stafungsi_cacattubuh); ?> <br>
                          <?php echo e($ass_kep[0]->stafungsi_Alatbantu); ?> <br>
                         </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Skrinning Gizi</p>
                          <?php echo e($ass_kep[0]->assesmen_nyeri); ?> <br>
                          <?php echo e($ass_kep[0]->Skri_gizi_1); ?> <br>
                          <?php echo e($ass_kep[0]->Skri_gizi_2); ?> <br>
                          <?php echo e($ass_kep[0]->Skri_gizi_3); ?> <br>
                          <?php echo e($ass_kep[0]->Skri_gizi_4); ?>

                         </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Rencana Keperawatan</p>
                          <?php echo e($ass_kep[0]->rencana_perawat); ?>

                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body text-md ">
                          <p class="text-bold text-md bg-warning">Tindakan Keperawatan</p>
                          <?php echo e($ass_kep[0]->tindakan_perawat); ?>

                        </div>
                      </div>
                     

                      <p class="text-right"> 
                        <img width="200px" src="<?php echo e($ass_kep[0]->ttd_perawat); ?>" alt=""> <br>

                      </p>

                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm/resume.blade.php ENDPATH**/ ?>