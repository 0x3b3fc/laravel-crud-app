<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <title>Laravel</title>
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
</head>
<body>
@include('layout.inc.nav')
    <div class="mt-5">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
