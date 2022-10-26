<?php $__env->startSection('container'); ?>
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
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                url: '<?= route('ambildatapasien2') ?>',
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
    <script>
        $(function() {
            $(".datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
        $(function() {
            $("#tabelpasienterpilih").DataTable({
                "responsive": true,
                "lengthChange": false,
                "pageLength": 100,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        function batalpilih() {
            $("#tabelpasien").slideToggle("slow");
            document.getElementById("pasienterpilih").style.display = "none";
        }
        function tstload() {
            spinner = $('#loader2');
            spinner.show();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('semeru.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm2/index.blade.php ENDPATH**/ ?>