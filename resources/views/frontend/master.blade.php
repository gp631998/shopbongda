<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop bóng đá | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/img/favicon.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/footer-logo.png') }}">
    <!-- Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,300,300italic,500italic,700' rel='stylesheet' type='text/css'>

    <!-- CSS  -->

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">

    <!-- font-awesome.min CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

    <!-- Mean Menu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/meanmenu.min.css')}}">

    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">

    <!-- owl.theme CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.css')}}">

    <!-- owl.transitions CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.transitions.css')}}">

    <!-- Price Filter CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}">

    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nivo-slider.css')}}">

    <!-- animate CSS
   ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">

    <!-- jquery-ui-slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui-slider.css')}}">

    <!-- normalize CSS
   ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.css')}}">

    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('assets/frontend/fonts/fontawesome-free-5.11.2-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- HEADER -->
@include('frontend.partials.header')
<!-- ENDHEADER -->
<!-- NAVBAR -->
@include('frontend.partials.navbar')
{{-- ENDNAVBAR --}}
<!-- LIST -->
@yield('content')
<!-- ENDLIST -->
{{--FOOTER --}--}}
@include('frontend.partials.footer')
{{-- ENDFOOTER --}}


<!-- JS -->

<!-- jquery-1.11.3.min js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/vendor/jquery-1.11.3.min.js') }}"></script>

<!-- bootstrap js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

<!-- nivo slider js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.nivo.slider.pack.js') }}"></script>

<!-- Mean Menu js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.meanmenu.min.js') }}"></script>

<!-- owl.carousel.min js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

<!-- jquery price slider js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-price-slider.js') }}"></script>

<!-- wow.js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<script type="text/javascript">
    new WOW().init();
</script>

<!-- plugins js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

<!-- main js
============================================ -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
