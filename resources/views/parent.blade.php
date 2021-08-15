<?php
$title = 'Welcome to LOANERR';
$description = '';
$keywords = '';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#FE7E22" />
    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" media="all" />
    @yield('stylesheet')
</head>

<body>
    <section class="main">
        @include('_component._header')
        
        <div class="container">
            @yield('content')
        </div>
        
        @include('_component._footer')
    </section>
    <script type="text/javascript" src="{{asset('assets/scripts.js')}}"></script>
    @yield('down_script')
</body>

</html>
