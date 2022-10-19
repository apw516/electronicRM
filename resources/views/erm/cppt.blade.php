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
                        @foreach ($ass_kep as $d)
                        <tr>
                            <td>{{ $d->tgl_selesai }}</td>
                            <td>Perawat Ruangan</td>
                            <td>
                                Sumber Data {{ $d->sumber_data }} <br>
                                Keluhan Utama = {{ $d->keluhan_utama   }} <br>
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
            </div>
            </td>
            <td>{{ $d->tgl_selesai }}</td>
                            <td>Perawat Ruangan</td>
                            <td>
                                Sumber Data {{ $d->sumber_data }} <br>
                                Keluhan Utama = {{ $d->keluhan_utama   }} <br>
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
            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>