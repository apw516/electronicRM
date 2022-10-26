<p class="text-lg text-bold">Data Pasien</p>
<table id="datapasien" class="table table-md text-md table-bordered table-hover">
    <thead>
        <th hidden>Kode kunjungan</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>alamat</th>
        <th hidden>Unit</th>
        <th>Poliklinik Asal</th>
        <th hidden>Kj</th>
    </thead>
    <tbody>
        @foreach ($pasien as $p)
            <tr class="pilihpasien toastsDefaultSuccess @if ($p->kj == null) bg-danger @endif"
                nomor-rm="{{ $p->no_rm }}" nama="{{ $p->nama }}" kodekunjungan="{{ $p->kode_kunjungan }}"
                alamat="{{ $p->alamat }}" counter="{{ $p->counter }}"umur="{{ $p->umur }}"
                unit="{{ $p->unit }}" tglmasuk="{{ $p->tgl_masuk }}">
                <td hidden>{{ $p->kode_kunjungan }}</td>
                <td>{{ $p->tgl_masuk }}</td>
                <td>{{ $p->no_rm }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->umur }} tahun</td>
                <td>{{ $p->alamat }}</td>
                <td hidden>{{ $p->unit }}</td>
                <td>{{ $p->asalunit }}</td>
                <td hidden>{{ $p->kj }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
     $(function() {
          $("#datapasien").DataTable({
              "responsive": false,
              "lengthChange": false,
              "pageLength": 100,
              "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          });
      });
    $('#datapasien').on('click', '.pilihpasien', function() {
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
        $(".pasienterpilih").slideToggle("slow");
        document.getElementById("tabelpasien").style.display = "none";
        // $('#tabelpasien').attr('hidden',true)       
        $.ajax({
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    rm,
                    nama,
                    alamat,
                    kodekunjungan,
                    unit,
                    tglmasuk,
                    umur,
                    counter
                },
                url: '<?= route('ermform') ?>',
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
</script>