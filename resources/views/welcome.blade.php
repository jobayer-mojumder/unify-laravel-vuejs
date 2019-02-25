<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-base-url" content="{{ url('/') }}" />
    <title>Laravel-VueJS</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/headers/header-default.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/footers/footer-v1.css') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/parallax-slider/css/parallax-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/theme-colors/default.css') }}" id="style_color">
    <link rel="stylesheet" href="{{ asset('public/assets/css/theme-skins/dark.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}">

</head>

<body class="boxed-layout container">
    <div id='app'>
        <div class="wrapper">
            <header-component></header-component>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
    </div>

    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/app.js') }}"></script>


    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset('public/assets/plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/jquery-appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/parallax-slider/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/parallax-slider/js/jquery.cslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ asset('public/assets/js/custom.js') }}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/progress-bar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/style-switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/parallax-slider.js') }}"></script>

</body>

</html>