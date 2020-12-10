<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--  Fontawesome Icons  -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-pro-5.5.0-web/css/all.min.css') }}">
    <style>
        .form-control:focus {
            border-color: #7952b3;
            box-shadow: 0 0 0 3px rgba(121, 82, 179, 0.25);
        }

        .form-check-input:checked {
            background-color: #7952b3;
            border-color: #7952b3;
        }

        .form-check-input:focus {
            border-color: #7952b3;
            box-shadow: 0 0 0 3px rgba(121, 82, 179, 0.25);
        }

        .btn-primary {
            color: #fff;
            background-color: #7952b3;
            border-color: #7952b3;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #6a33bc;
            border-color: #7952b3;
        }

        .btn-primary:focus, .btn-primary.focus {
            color: #fff;
            background-color: #6a33bc;
            border-color: #7952b3;
            box-shadow: 0 0 0 3px rgba(121, 82, 179, 0.25);
        }

        .btn-outline-primary {
            color: #7952b3;
            border-color: #7952b3;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #7952b3;
            border-color: #7952b3;
        }

        .btn-outline-primary:focus, .btn-outline-primary.focus {
            box-shadow: 0 0 0 3px rgba(121, 82, 179, 0.25);
        }

        .bg-primary {
            background-color: #7952b3 !important;
        }

        body {
            font-family: 'Bree Serif', serif !important;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    @include('partials.navbar')

    <main class="py-2">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
