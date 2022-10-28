<div class="card">
    <div class="card-header text-md" style="font-family:calibri">RESUME RAWAT JALAN
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
    </div>

    <!-- <div class="card-body container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header" style="background-color:wheat;">
                <h4>RESUME DOKTER ( {{ $ass_awal[0]->kode_kunjungan }} )</h4>
                </div>
                <table style="font-family:calibri" class="table table-md table-bordered text-md">
                    <thead  style="background-color:wheat;">
                        <th>Tanggal dan waktu</th>
                        <th>Resume Medis Rawat Jalan</th>
                        <th>verifikasi DPJP</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        <td>
                            {{ $ass_awal[0]->tglwaktu_selesai }}
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Keluhan Utama</p>
                                    {{ $ass_awal[0]->keluhan_utama }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Riwayat Penyakit</p>
                                    {{ $ass_awal[0]->riwayat_penyakit }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Diagnosis</p>
                                    {{ $ass_awal[0]->diagnosis }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Pemeriksaan Fisik</p>
                                    {{ $ass_awal[0]->pemeriksaan_fisik }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Rencana Pemeriksaan Penunjang</p>
                                    {{ $ass_awal[0]->rencana_pemeriksaan_penunjang }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Dirujuk</p>
                                    {{ $ass_awal[0]->dirujuk_ke }}
                                </div>
                            </div>

                        </td>
                        <td>
                            <img width="200px" src="{{ $ass_awal[0]->signature }}" alt=""> <br>

                        </td>
                        <td>
                            <button class="btn btn-success editass_awal" kodekunjungan="{{ $ass_awal[0]->kode_kunjungan }}"><i class="fas fa-pen"></i> | EDIT</button>
                        </td>
                    </tbody>
                </table>
                <table style="font-family:calibri" class="table table-md table-bordered text-md">
                    <h4>Resume Dokter ( {{ $ass_kep[0]->kode_kunjungan }} )</h4>
                    <thead class="bg-secondary">
                        <th>Tanggal dan waktu</th>
                        <th>Resume Medis Rawat Jalan</th>
                        <th>verifikasi DPJP</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        <td>
                            {{ $ass_kep[0]->tgl_selesai }}
                        </td>
                        <td>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Keluhan Utama</p>
                                    {{ $ass_kep[0]->keluhan_utama }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Diagnosa</p>
                                    {{ $ass_kep[0]->diag_perawat }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Rencana Keperawatan</p>
                                    {{ $ass_kep[0]->rencana_perawat }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Tindakan Perawat</p>
                                    {{ $ass_kep[0]->tindakan_perawat }}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-bold">Evaluasi Perawat</p>
                                    {{ $ass_kep[0]->evaluasi_perawat }}
                                </div>
                            </div>
                            

                        </td>
                        <td>
                            <img width="200px" src="{{ $ass_kep[0]->ttd_perawat }}" alt=""> <br>

                        </td>
                        <td>
                            <button class="btn btn-success editass_kep align: middle" kodekunjungan="{{ $ass_kep[0]->kode_kunjungan }}"><i class="fas fa-pen"></i> | EDIT</button>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</div>