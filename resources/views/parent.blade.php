<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Add Listing Website</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jasny-bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/css/material-kit.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/fonts/themify-icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/color-switcher.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/extras/animate.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/extras/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/extras/owl.theme.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/extras/settings.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/red.css')}}" media="screen" />

    <style>
        .search-container{
            padding: 20px;
        }
    </style>
    
    @yield('stylesheet')
</head>

<body>

    @php
        $currentRoute = Route::currentRouteName();
    @endphp
    @if ($currentRoute != 'index' && $currentRoute != 'show_adlist' && $currentRoute != 'adlist.category')
        <div class="header">
            @include('_component._header')
        </div>
    @endif

    @yield('content')

    @include('_component._footer')

    <script type="text/javascript" src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/material.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/material-kit.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/color-switcher.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/jquery.counterup.min.js")}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>

    @yield('down_script')
</body>
</html>
