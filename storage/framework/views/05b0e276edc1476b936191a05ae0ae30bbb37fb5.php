<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo e(asset('public/logo_rs.png')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/semeru/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/semeru/dist/css/adminlte.min.css')); ?>">
    <title><?php echo e($title); ?></title>
    <style>
        .bg-black {
            color: black
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .preloader2 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            opacity: 0.9;
        }

        .preloader2 .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
</head>

<body style="background: url('public/img/bg-hs.png') no-repeat fixed center;background-size: 1600px 900px;">
    <div class="preloader2" id="loader2">
        <div class="loading">
            <img src="<?php echo e(asset('public/img/loader.gif')); ?>" width="680">
        </div>
    </div>
    <!-- Image and text -->
    <nav class="navbar" style="background-color:rgb(33, 65, 45)">
        <div class="container">
            <a class="navbar-brand text-light">
                <img src="<?php echo e(asset('public/img/semeru.png')); ?>" width="360" height="60"
                    class="d-inline-block align-top ml-2 mr-2" alt="">
            </a>
            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <ul class="nav justify-content-end">
                    <li class="nav-item mr-1">
                        <div class="row col-md-12">
                            <div class="col-sm-5">
                                <!-- text input -->
                                <div class="form-group">
                                    <label class="text-light">Username</label>
                                    <input type="text"
                                        class="form-control form-control-sm <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="username" placeholder="" value="<?php echo e(old('username')); ?>">
                                    <?php if(session()->has('loginError')): ?>
                                        <small id="emailHelp" class="form-text text-danger">
                                            <?php echo e(session('loginError')); ?></small>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label class="text-light">Password</label>
                                    <input type="password"
                                        class="form-control form-control-sm <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="password" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <button class="btn btn-success btn-sm shadow-lg"
                                        style="margin-top:32px">Login</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    
    <div class="container py-5 h-90">
        <div class="row d-flex justify-content-center align-items-center h-100 bg-light" style="opacity: 0.8">
            <div class="col">
                <div class="card card-registration my-2" style="background:none">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="<?php echo e(asset('public/img/bg-reg3.gif')); ?>" alt="Sample photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-2 text-black">
                                <h3 class="mb-2 text-uppercase">Registrasi Akun </h3>
                                <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>

                                <form action="<?php echo e(route('register')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-outline mb-1">
                                        <label class="form-label" for="form3Example9">Nama</label>
                                        <input type="text" id="" name="name" required
                                            class="form-control form-control-sm <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('name')); ?>" />
                                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small id="emailHelp" class="form-text text-danger">
                                                <?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-outline mb-1">
                                        <label class="form-label" for="form3Example90">Username</label>
                                        <input type="text" id=""
                                            class="form-control form-control-sm <?php $__errorArgs = ['username1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="username1" required value="<?php echo e(old('username')); ?>" />
                                        <?php $__errorArgs = ['username1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small id="emailHelp" class="form-text text-danger">
                                                <?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-outline mb-1">
                                        <label class="form-label" for="form3Example99">Unit</label>
                                        <input class="form-control form-control-sm <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="unit" id="unit" required />
                                        <input hidden class="form-control form-control-sm <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="kodeunit" id="kodeunit" required />
                                        <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small id="emailHelp" class="form-text text-danger">
                                                <?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-outline mb-1">
                                        <label class="form-label" for="form3Example99">Password</label>
                                        <input type="password" id=""
                                            class="form-control form-control-sm <?php $__errorArgs = ['password1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="password1" required />
                                        <?php $__errorArgs = ['password1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small id="emailHelp" class="form-text text-danger">
                                                <?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="d-flex justify-content-end pt-3">
                                        
                                        <button type="submit" class="btn btn-success btn-lg ms-2">Daftar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <p class="text-muted">@semerusmartV2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="<?php echo e(asset('public/semeru/dist/js/jquery-3.js')); ?>"></script>
    <script src="<?php echo e(asset('public/semeru/dist/js/jquery-ui.min.js')); ?>"></script>

    <!-- jQuery -->
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('public/semeru/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- semeru App -->
    <script src="<?php echo e(asset('public/semeru/dist/js/adminlte.min.js')); ?>"></script>
    <script>
        $(".preloader2").fadeOut();
        $(document).ready(function() {
            $('#unit').autocomplete({
                source: "<?= route('cariunit') ?>",
                select: function(event, ui) {
                    $('[id="unit"]').val(ui.item.label);
                    $('[id="kodeunit"]').val(ui.item.kode);
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\semerusmart2\resources\views/login/index.blade.php ENDPATH**/ ?>