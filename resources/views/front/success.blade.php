@extends('front.master.master')

@section('title')
Check Out | Nanna Briyani
@endsection


@section('body')

<div class="container position-relative">
    <div class="py-5 row g-4">

    <div class="col-md-12">
    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
        <img alt="osahan" src="{{ asset('/') }}public/logo/logo.jpeg" class="me-3 rounded-circle img-fluid">
        <div class="d-flex flex-column">
        <h6 class="mb-1 fw-bold">Nanna Briyani</h6>
        <p class="mb-0 small text-muted"><i class="feather-map-pin"></i>London</p>
       Your Order ID : {{ $pinNum }}
        </div>
    </div>
    </div>




    </div>
    </div>
    </div>

@endsection

@section('script')



@endsection
