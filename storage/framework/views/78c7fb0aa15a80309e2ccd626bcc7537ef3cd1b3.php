<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="margin-top:130px">
        <div id="tabelpasien" class="container" >
          
        </div>

        <div style="display:none" id="pasienterpilih" class="card pasienterpilih">
            
        </div>
        <!-- /.card -->
    </div>
  
    <script>
        onload = ambildatapasien()
        function ambildatapasien(){
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: 'post',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
            },
            url: '<?= route('tampildatapasien') ?>',
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
                $("#tabelpasien").html(response)
            }
        });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('semeru.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e-RM\resources\views/erm/index.blade.php ENDPATH**/ ?>