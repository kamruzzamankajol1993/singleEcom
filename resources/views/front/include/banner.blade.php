<div class="banner-area-two">
    <div class="banner-slider owl-theme owl-carousel">


        @foreach($sliderList as $AllSliderList)
    <div class="banner-item">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="banner-content">
    <h1>{{ $AllSliderList->title_one }}</h1>
    <p>{{ $AllSliderList->title_two }}</p>
    <a class="common-btn" href="#ddd">
        {{ $AllSliderList->button_name }}
    <img src="{{ asset('/') }}public/front/assets/images/shape1.png" alt="Shape">
    <img src="{{ asset('/') }}public/front/assets/images/shape2.png" alt="Shape">
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="banner-img">
    <img src="{{ asset('/') }}{{ $AllSliderList->big_image }}" alt="Banner">
    <img src="{{ asset('/') }}{{ $AllSliderList->small_image }}" alt="Shape">
    </div>
    </div>
    @endforeach



    </div>
    </div>
