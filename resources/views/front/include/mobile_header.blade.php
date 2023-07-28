<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
    <div class="col selected">
    <a href="{{ route('index') }}" class="text-danger small fw-bold text-decoration-none">
    <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
    Home
    </a>
    </div>
    <div class="col">
    <a href="{{ route('menuInformation') }}" class="text-dark small fw-bold text-decoration-none">
    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
    Menu
    </a>
    </div>
    <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
    <div class="bg-danger rounded-circle mt-n0 shadow">
    <a href="{{ route('checkOut') }}" class="text-white small fw-bold text-decoration-none">
    <i class="feather-shopping-cart"></i>
    </a>
    </div>
    </div>
    <div class="col">
    <a href="{{ route('orderList') }}" class="text-dark small fw-bold text-decoration-none">
    <p class="h4 m-0"><i class="feather-heart"></i></p>
    Order
    </a>
    </div>
    <div class="col">
    <a href="{{ route('popularItem') }}" class="text-dark small fw-bold text-decoration-none">
    <p class="h4 m-0"><i class="feather-user"></i></p>
    Popular
    </a>
    </div>
    </div>
    </div>
