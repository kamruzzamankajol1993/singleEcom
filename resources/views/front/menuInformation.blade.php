@extends('front.master.master')

@section('title')
Menu Information | Nanna Briyani
@endsection


@section('body')
<div class="container position-relative">
    <div class="row">
    <div class="col-md-8 pt-3">
    <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
    <div class="d-flex item-aligns-center">
    <p class="fw-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>

    </div>
    @foreach($categoryList as $allCategoryList)
    <?php
$totalitem = DB::table('food')->where('category_slug',$allCategoryList->slug)->count();
$allFoodList = DB::table('food')->where('category_slug',$allCategoryList->slug)->latest()->get();
    ?>
    <div class="row m-0">
    <h6 class="p-3 m-0 bg-light w-100">{{ $allCategoryList->name }} <small class="text-black-50">{{ $totalitem }} ITEMS</small></h6>
    <div class="col-md-12 px-0 border-top">
    <div class="">

@foreach($allFoodList as $allFoodListAll)
        <div class="d-flex align-items-center gap-2 p-3 border-bottom menu-list">
    <img alt="#" src="{{ asset('/') }}{{ 'public/'.$allFoodListAll->image }}" class="rounded-pill">
    <div>
    <h6 class="mb-1">{{ $allFoodListAll->name }} </h6>
    <p class="text-muted mb-0">£ {{ $allFoodListAll->price }}</p>
    </div>
    <span class="ms-auto"><a href="{{ route('addToCart',$allFoodListAll->id) }}" class="btn btn-outline-secondary btn-sm" >ADD</a></span>
    </div>
@endforeach


    </div>
    </div>
    </div>

@endforeach


    </div>

    </div>
    <div class="col-md-4 pt-3">
    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar mb-3">
    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
    <img alt="osahan" src="{{ asset('/') }}public/logo/logo.jpeg" class="me-3 rounded-circle img-fluid">
    <div class="d-flex flex-column">
    <h6 class="mb-1 fw-bold">Nanna Briyani</h6>
    <p class="mb-0 small text-muted"><i class="feather-map-pin"></i>London</p>
    @include('flash_message');
    </div>
    </div>
    <div class="bg-white border-bottom py-2">

        @foreach($cartCollection as $allProduct)
    <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">

        <div class="d-flex align-items-center">
    <div class="me-2 text-danger">&middot;</div>
    <div class="media-body">
    <p class="m-0">{{ $allProduct->name }}</p>
    </div>
    </div>

    <div class="d-flex align-items-center">
        <form method="get" action="{{ route('updateCart') }}">
    <span class="count-number float-end">

        <button type="submit" name="finalValue" value="minus" class="btn-sm left dec btn btn-outline-secondary">
            <i class="feather-minus"></i> </button>
            <input class="hidden" type="hidden" name="id" value="{{ $allProduct->id }}">
            <input class="count-number-input" name="quantity" type="text" readonly="" value="{{ $allProduct->quantity }}">
            <button type="submit" name="finalValue" value="plus" class="btn-sm right inc btn btn-outline-secondary">
                <i class="feather-plus"></i>
            </button>

        </span>
    </form>
    <p class="text-gray mb-0 float-end ms-2 text-muted small">£ {{ $allProduct->quantity*$allProduct->price }}</p>
    </div>
    </div>
@endforeach


    </div>
    <div class="bg-white p-3 py-3 border-bottom clearfix">
    {{-- <div class="input-group input-group-sm mb-2">
    <input placeholder="Enter promo code" type="text" class="form-control">
    <button class="btn btn-primary" type="button" id="button-addon2"><i class="feather-percent"></i> APPLY</button>
    </div>
    <div class="input-group">
    <span class="input-group-text" id="message"><i class="feather-message-square"></i></span>
    <textarea placeholder="Any suggestions? We will pass it on..." aria-label="With textarea" class="form-control"></textarea>
    </div> --}}
    </div>
    <div class="bg-white p-3 clearfix border-bottom">
    <p class="mb-1">Item Total <span class="float-end text-dark">£ {{ \Cart::getTotal() }}</span></p>
    {{-- <p class="mb-1">Restaurant Charges <span class="float-end text-dark">$62.8</span></p>
    <p class="mb-1">Delivery Fee<span class="text-info ms-1"><i class="feather-info"></i></span><span class="float-end text-dark">$10</span></p>
    <p class="mb-1 text-success">Total Discount<span class="float-end text-success">$1884</span></p> --}}
    <hr>
    <h6 class="fw-bold mb-0">TO PAY <span class="float-end">£ {{ \Cart::getTotal() }}</span></h6>
    </div>
    <div class="p-3">
    <a class="btn btn-success w-100 btn-lg" href="{{ route('checkOut') }}">PAY £ {{ \Cart::getTotal() }}<i class="feather-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('script')

@endsection
