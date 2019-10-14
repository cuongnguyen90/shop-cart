<!DOCTYPE html>
<html lang="{{config(app()->getLocale())}}">
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    @yield('title')
    <meta property="og:url" content="{{url('')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Freshfood" />
    <meta property="og:description" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" />
    <meta name="twitter:title" content="Freshfood" />
    <meta name="twitter:image" content="" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />

    <!-- START STYLE -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('template/css/stylesheet.min.css?v=1544773292')}}" data-minify="1" />

    <link href="{{URL::to('template/css/owl.carousel.min.css')}}" type="text/css" rel="stylesheet" media="screen" />
    <link href="https://freshfood.exdomain.net/image/catalog/logo/fav.png" rel="icon" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('template/css/stylesheet.css?v=1544773292')}}" />
    <link rel="stylesheet" href="{{URL::to('template/css/social_login_button.css')}}"/>
    @yield('style')
</head>
<body class="common-home">
@include('frontend.layouts.header')
@yield('slide')
@yield('content')
@include('frontend.layouts.footer')
@include('frontend.layouts.script')
@yield('script')
<!-- Facebook Login --> <!-- Google Login --> <!-- Facebook script -->
<!-- Show Popup Cart -->
@include('frontend.layouts.cart')
</body>
</html>
