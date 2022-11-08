<div class="row">
    <div class="col-md-5">
        <table id="tabellayanan" class="table table-md table-hover table-stripped">
            <thead class="bg-info">
                <th>kode</th>
                <th>tindakan</th>
                <th>tarif</th>
            </thead>
            <tbody>
                @foreach ($layanan as $t )
                <tr class="pilihlayanan" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                    <td>{{ $t->kode}}</td>
                    <td>{{ $t->Tindakan}}</td>
                    <td>{{ $t->tarif}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header bg-success">Tindakan / Layanan Pasien</div>
            <div class="card-body">
                <form action="" method="post" class="formtindakan">
                    <div class="input_fields_wrap">
                        <div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih dokter</label>
                            <select class="form-control" id="dokterpemeriksa">
                                @foreach ($dokter as $d)
                                <option value="{{ $d->kode_dokter }}">{{ $d->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="button" class="btn btn-warning mb-2 simpanlayanan" id="simpanlayanan">Simpan Tindakan</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p>pilih layanan untuk pasien</p>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#tabellayanan").DataTable({
                "responsive": true,
                "lengthChange": false,
                "pageLength": 8,
                "searching": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        $('#tabellayanan').on('click', '.pilihlayanan', function() {
            var max_fields = 10; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var x = 1; //initlal text box count
            kode = $(this).attr('kode')
            namatindakan = $(this).attr('namatindakan')
            tarif = $(this).attr('tarif')
            // e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(
                    '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                    namatindakan +
                    '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                    kode +
                    '"></div><div class="form-group col-md-3"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                    tarif +
                    '"></div><div class="form-group col-md-2"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
                );
                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                })
            }
        });
        $(".simpanlayanan").click(function() {
            var data = $('.formtindakan').serializeArray();
            var kodekunjungan = $('#kodekunjungan').val()
            var dokterpemeriksa = $('#dokterpemeriksa').val()
            $.ajax({
                async: true,
                type: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    data: JSON.stringify(data),
                    kodekunjungan: kodekunjungan,
                    dokterpemeriksa: dokterpemeriksa,
                },
                url: '<?= route('simpanlayanan') ?>',
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah ...',
                        footer: ''
                    })
                },
                success: function(data) {
                    if (data.kode == 500) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            footer: ''
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: 'Data berhasil disimpan!',
                            footer: ''
                        })
                    }
                }
            });
        });
    </script>