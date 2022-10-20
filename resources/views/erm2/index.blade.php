@extends('erm2.templates.header')
@section('container')
<div class="container-fluid" style="margin-top:130px">
        <div id="tabelpasien" class="container" >
            <p class="text-lg text-bold">Data Pasien</p>
            <table id="datapasien" class="table table-sm text-xs table-bordered table-hover">
                <thead>
                    <th hidden>Kode kunjungan</th>
                    <th>Tanggal Masuk</th>
                    <th>Nomor RM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>alamat</th>
                    <th>Poliklinik Asal</th>
                    <th hidden>unit</th>
                </thead>
                <tbody>
                    @foreach ($pasien as $p )                        
                    <tr class="@if ($p->kjper != (null) ) pilihpasien @endif toastsDefaultSuccess @if ($p->kjdok == (null) ) bg-danger @endif "  nomor-rm="{{ $p->no_rm }}" tglkunjugan="{{ $p->tgl_masuk }}" nama="{{ $p->nama }}" kodekunjungan="{{ $p->kode_kunjungan }}" alamat="{{ $p->alamat }}" counter="{{ $p->counter }}"umur="{{ $p->umur }}" unit="{{ $p->unit }}" tglmasuk = {{ $p->tgl_masuk }}>
                        <td hidden>{{ $p->kode_kunjungan }}</td>
                        <td>{{ $p->tgl_masuk }}</td>
                        <td>{{ $p->no_rm }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->umur }} tahun</td>
                        <td>{{ $p->alamat }}</td>
                        <td hidden>{{ $p->unit }}</td>
                        <td>{{ $p->asalunit }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="display:none" id="pasienterpilih" class="card pasienterpilih">
            
        </div>
        <!-- /.card -->
    </div>
@endsection