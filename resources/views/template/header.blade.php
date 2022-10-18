<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/semeru/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/semeru/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .scroll {
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini" @if($menu == 1) style="background-image:url('{{ asset('public/semeru/dist/img/bg11.jpg') }}');  background-size: 1500px 900px; background-position:center;background-repeat: no-repeat;" @endif>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:rgb(71, 214, 143);  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-family:Lucida Console">
                <img src="{{ asset('public/semeru/dist/img/logo_rs.png') }}" width="45" height="40" class="d-inline-block align-top mr-3" alt="">
                Semerusmart
            </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    @if($menu == 1) <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard')}}"><i class="bi bi-box-arrow-in-right mr-2"></i> Dashboard</a>
                    </li> @endif
                    @if($menu == 2)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')}}"><i class="bi bi-box-arrow-in-right mr-2"></i> Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @yield('container')
    </div>
    <!-- ./wrapper -->
    @include('template.footer')  
</body>

</html>