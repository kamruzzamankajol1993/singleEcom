<!DOCTYPE html>
<html lang="zxx">


<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/fonts/flaticon.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/nice-select.min.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/boxicons.min.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/meanmenu.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/css/layers.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/css/navigation.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/modal-video.min.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/style.css">

<link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/responsive.css">
<link href="https://fonts.cdnfonts.com/css/hind-siliguri" rel="stylesheet">
<title>{{ $seoInfoTitle }}</title>
<link rel="icon" type="image/png" href="{{ asset('/') }}{{ $seoInfoIcon }}">
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="pre-load">
<div class="inner one"></div>
<div class="inner two"></div>
<div class="inner three"></div>
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <center><h1 style="padding: 20px;">


@if(!$mainTitle)

@else
            {{ $mainTitle->title }}
            @endif

        </h1></center>
        </div>
    </div>
</div>



@include('front.include.banner')


@yield('body')


@include('front.include.footer')






<div class="go-top">
<i class='bx bxs-up-arrow-circle'></i>
<i class='bx bxs-up-arrow-circle'></i>
</div>


<script src="{{ asset('/') }}public/front/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/bootstrap.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/form-validator.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/contact-form-script.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery.nice-select.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery.meanmenu.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/jquery.themepunch.revolution.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery.mixitup.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/owl.carousel.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/jquery-modal-video.min.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/thumb-slide.js"></script>

<script src="{{ asset('/') }}public/front/assets/js/custom.js"></script>
</body>


</html>
