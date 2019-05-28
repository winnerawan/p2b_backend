<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/additional.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/sidebar.css') }}">    
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/widgets.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/at.js/1.4.0/css/jquery.atwho.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="fill open-sidebar">
     
    @include('partials.sidebar')
        <div class="main-content">
            @include('partials.header')
                @yield('dashboard')
                
        </div>
        
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script> 
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>    
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('admin/js/smooth-scroll.min.js') }}"></script> -->
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('admin/js/Chart.bundle.min.js') }}"></script>    
    <script src="{{ asset('admin/js/index.js') }}"></script>
    <script src="{{ asset('admin/js/default.js') }}"></script>
        @yield('extra-js')    
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script> 
</body>
</html>   