<header class="section-header">
    <section class="header-main shadow-sm bg-white">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-1">
    <a href="{{ route('index') }}" class="brand-wrap mb-0">
    <img alt="" class="img-fluid" src="{{ asset('/') }}public/logo/logo.jpeg">
    </a>

    </div>
    <div class="col-3 d-flex align-items-center m-none">
    <div class="dropdown me-3">

    <input type="text" class="form-control"placeholder="Search"/>
    </div>
    </div>

    <div class="col-8">
    <div class="d-flex align-items-center justify-content-end pe-5">

    <a href="{{ route('index') }}" class="widget-header me-4 text-dark">
    <div class="icon d-flex align-items-center">
    <i class="feather-home h6 me-2 mb-0"></i> <span>Home</span>
    </div>
    </a>



    <div class="dropdown me-4 m-none">
    <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img alt="#" src="{{ asset('/') }}public/front/user.png" class="img-fluid rounded-circle header-user me-2 header-user"> Hi
    </a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{ route('orderList') }}">My Order list</a>

    <a class="dropdown-item" href="#">Contact us</a>


    </div>
    </div>

    <a href="{{ route('checkOut') }}" class="widget-header me-4 text-dark">
    <div class="icon d-flex align-items-center">
    <i class="feather-shopping-cart h6 me-2 mb-0"></i> <span>Check Out</span>
    </div>
    </a>
    <a class="toggle" href="#">
    <span></span>
    </a>
    </div>

    </div>

    </div>

    </div>

    </section>

    </header>
