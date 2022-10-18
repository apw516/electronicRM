<div class="row">
    <div class="col-md-4">
        <table id="tabellayanan" class="table table-sm table-hover table-stripped">
            <thead class="bg-info">
                <th>kode</th>
                <th>tindakan</th>
                <th>tarif</th>
            </thead>
            <tbody>
                @foreach ($layanan as $l )
                    <tr class="pilihlayanan">
                        <td>{{ $l->kode}}</td>
                        <td>{{ $l->Tindakan}}</td>
                        <td>{{ $l->tarif}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div
    <div class="col-md-8">
    </div>
</div>
<script>
    $(function() {
        $("#tabellayanan").DataTable({
            "responsive": true,
            "lengthChange": false,
            "pageLength": 5,
            "searching": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>