 @foreach ($periode as $p)
     <div class="card card-light collapsed-card">
         <div class="card-header">
             <h3 class="card-title">{{ $p->tanggal_masuk }}</h3>
             <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                 </button>
             </div>
             <!-- /.card-tools -->
         </div>
         <!-- /.card-header -->
         <div class="card-body scroll2">
             <H5 class="text-bold text-danger">Riwayat Pelayanan / Tindakan Medis</H5>
             <table style="font-family:calibri" class="table table-sm text-md">
                 <thead>
                     <th>TGL MASUK</th>
                     <th>TGL KELUAR</th>
                     <th>COUNTER</th>
                     <th>NAMA PASIEN</th>
                     <th>NAMA TARIF</th>
                     <th>PENJAMIN</th>
                     <th>PELAYANAN</th>
                     <th>UNIT</th>
                     <th>DOKTER</th>
                 </thead>
                 <tbody>
                     @foreach ($kunjungan as $r)
                         @if ($p->tanggal_masuk == $r->TGL_MASUK)
                             <tr>
                                 <td>{{ $r->TGL_MASUK }}</td>
                                 <td>{{ $r->TGL_KELUAR }}</td>
                                 <td>{{ $r->KONTER }}</td>
                                 <td>{{ $r->NAMA_PX }}</td>
                                 <td>{{ $r->NAMA_TARIF }}</td>
                                 <td>{{ $r->PENJAMIN }}</td>
                                 <td>{{ $r->SEQ_1 }}</td>
                                 <td>{{ $r->NAMA_UNIT }}</td>
                                 <td>{{ $r->NAMA_PARAMEDIS }}</td>
                             </tr>
                         @endif
                     @endforeach
                 </tbody>
             </table>
         </div>
         <!-- /.card-body -->
     </div>
 @endforeach
