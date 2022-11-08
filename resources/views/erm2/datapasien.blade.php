<table style="font-family:calibri" id="datapasien2" class="table table-sm text-xs table-bordered table-hover">
    <thead>
        <th hidden>Kode kunjungan</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>alamat</th>
        <th>Poliklinik Asal</th>
        <th>Status</th>
        <th hidden>unit</th>
    </thead>
    <tbody>
        @foreach ($pasien as $p)
            <tr class="@if ($p->kjper != null) pilihpasien toastsDefaultSuccess @endif "
                nomor-rm="{{ $p->no_rm }}" tglkunjugan="{{ $p->tgl_masuk }}" nama="{{ $p->nama }}"
                kodekunjungan="{{ $p->kode_kunjungan }}" alamat="{{ $p->alamat }}"
                counter="{{ $p->counter }}"umur="{{ $p->umur }}" unit="{{ $p->unit }}"
                tglmasuk={{ $p->tgl_masuk }}>
                <td hidden>{{ $p->kode_kunjungan }}</td>
                <td>{{ $p->tgl_masuk }}</td>
                <td>{{ $p->no_rm }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->umur }} tahun</td>
                <td>{{ $p->alamat }}</td>
                <td hidden>{{ $p->unit }}</td>
                <td>{{ $p->asalunit }}</td>
                <td> @if($p->kjper == NULL)    
            <span class="right badge badge-danger">Assesmen keperawatan belum diisi ...</span>
            @else
            <span class="right badge badge-success">Assesmen keperawatan sudah diisi ...</span>
            @endif   </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(function() {
        $("#datapasien2").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 8,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $('#datapasien2').on('click', '.pilihpasien', function() {
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
        tglkunjugan = $(this).attr('tglkunjugan')
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
                counter,
                tglkunjugan
            },
            url: '<?= route('ermform2') ?>',
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