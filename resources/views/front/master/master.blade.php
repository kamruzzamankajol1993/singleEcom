<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Nanna Briyani">
<meta name="author" content="Nanna Briyani">
<link rel="icon" type="image/png" href="{{ asset('/') }}public/logo/logo.jpeg">
<title>@yield('title')</title>

<link href="{{ asset('/') }}public/front/vendor/slick/slick/slick.css" rel="stylesheet" type="text/css">
<link href="{{ asset('/') }}public/front/vendor/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">

<link href="{{ asset('/') }}public/front/vendor/icons/feather.css" rel="stylesheet" type="text/css">

<link href="{{ asset('/') }}public/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('/') }}public/front/css/style.css" rel="stylesheet">

<link href="{{ asset('/') }}public/front/vendor/sidebar/demo.css" rel="stylesheet">
</head>
<body class="fixed-bottom-bar">
@include('front.include.header')
<div class="osahan-home-page">

    @if(Route::is('menuInformation') || Route::is('checkOut') || Route::is('successPage') || Route::is('popularItem') || Route::is('orderList') )

    @else

    @include('front.include.header_one')

    @endif



@yield('body')
</div>

@include('front.include.mobile_header')


@include('front.include.footer')


@include('front.include.sidebar')


<script  src="{{ asset('/') }}public/front/vendor/jquery/jquery.min.js"></script>
<script  src="{{ asset('/') }}public/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script  src="{{ asset('/') }}public/front/vendor/slick/slick/slick.min.js"></script>

<script  src="{{ asset('/') }}public/front/vendor/sidebar/hc-offcanvas-nav.js"></script>

<script src="{{ asset('/') }}public/front/js/osahan.js"></script>
@yield('script')
</body>


</html>
