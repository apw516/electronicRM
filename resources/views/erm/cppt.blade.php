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
                        <th>Tanggal / Jam</th>
                        <th>Profesi</th>
                        <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis
                            dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan
                            dalam assesmen.</th>

                    </thead>
                    <tbody>
                        @foreach ($ass_kep as $d)
                            <tr>
                                <td>{{ $d->tgl_selesai }}</td>
                                <td>Perawat Poli</td>
                                <td>
                                    Sumber Data = {{ $d->sumber_data_askep }} <br>
                                    Keluhan Utama = {{ $d->keluhan_utamaperawat }} <br>
                                    tekanan darah = {{ $d->ttv_tekanan_darah }} mmHg <br>
                                    frekuensi nafas = {{ $d->ttv_freq_napas }} X/menit<br>
                                    frekuensi nadi = {{ $d->ttv_freq_nadi }} X/menit <br>
                                    suhu badan = {{ $d->ttv_suhu }} °C<br><br>
                                    {{-- Riwayat Psikologis -> {{ $d->riwayat_Psikologis }} <br>
                                Status Fungsi Alat Bantu -> {{ $d->stafungsi_Alatbantu }} <br>
                                Cacat Tubuh -> {{ $d->stafungsi_cacattubuh }} <br><br> --}}
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="text-bold">Rencana Keperawatan</p>
                                            {{ $d->rencana_perawat }}
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="text-bold">Tindakan Keperawatan</p>
                                            {{ $d->tindakan_perawat }}
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="text-bold">Evaluasi Keperawatan</p>
                                            {{ $d->evaluasi_perawat }}
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Tanda tangan perawat</div>
                                        <div class="card-body">

                                            <img src="{{ $d->ttd_perawat }}" alt=""> <br>

                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </td>
                                <td>{{ $d->tglwaktu_selesai }}</td>
                                <td>{{ $d->nama_dokter }}</td>
                                <td>
                                    @if ($d->kunjungan_2 != null)
                                        Sumber Data = {{ $d->sumber_data_asmed }} <br>
                                        Keluhan Utama = {{ $d->keluhan_utamadokter }} <br>
                                        Riwayat Penyakit = {{ $d->riwayat_penyakit }} <br>
                                        Riwayat Alergi = {{ $d->riwayat_alergi_0 }} {{ $d->riwayat_alergi_1 }} <br>
                                        Pemeriksaan Fisik = {{ $d->pemeriksaan_fisik }} <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-bold">Diagnosis</p>
                                                {{ $d->diagnosis }}
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-bold">Rencana Terapi</p>
                                                {{ $d->rencana_terapi }}
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="text-bold">Rencana Pemeriksaan Penunjang</p>
                                                {{ $d->rencana_pemeriksaan_penunjang }}
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">Tanda tangan Dokter</div>
                                            <div class="card-body">

                                                <img src="{{ $d->signature }}" alt=""> <br>

                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="text-bold text-center"> Waled, {{ $d->tglwaktu_selesai }}
                                                    </p>
                                                    <p class="text-bold text-center"> {{ $d->nama_dokter }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">

                                            </div>
                                        </div>
                                    @else
                                        <H4>
                                            Dokter belum mengisi ...
                                        </H4>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
