@extends('front.master.master')

@section('title')
Order List | Nanna Briyani
@endsection


@section('body')
<div class="container">



    <div class="py-3 title d-flex align-items-center">
    <h5 class="m-0">Order List</h5>

    </div>

    <div class="most_popular">
    <div class="row">

        @foreach($foodList as $allFoodList)
    <div class="col-md-3 pb-4">
    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
    <p>Order Id:{{ $allFoodList->order_d }}</p>
    <p>Order Status:{{ $allFoodList->order_status }}</p>
    </div>
    </div>
    @endforeach

    </div>

    </div>


    </div>
@endsection

@section('script')

@endsection
