@extends('semeru.header')
@section('container')
    <div class="container-fluid" style="margin-top:130px">
        <div id="tabelpasien" class="container">
            
        </div>

        <div style="display:none" id="pasienterpilih" class="card pasienterpilih">

        </div>
        <!-- /.card -->
    </div>
    <script>
        onload = ambildatapasien()
        function ambildatapasien() {
            spinner = $('#loader2');
            spinner.show();
            $.ajax({
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                url: '<?= route('ambildatapasien') ?>',
                error: function(data) {
                    spinner.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sepertinya ada masalah ...',
                        footer: ''
                    })
                },
                success: function(response) {
                    spinner.hide();
                    $('#tabelpasien').html(response)
                }
            });
        }
    </script>
@endsection
