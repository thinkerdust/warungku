<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('assets/images/icon.png') }}">

        <title>Warung Ku</title>
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->

        <!-- Content -->
        @yield('contents')
        <!-- End Content -->

        <!-- Footer -->
        @include('layouts.footer')
        <!-- End Footer -->

        <a onclick="topFunction()" class="back-to-top" id="btn-top"><i class="fa fa-chevron-up"></i></a>

        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
