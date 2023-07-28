@extends('front.master.master')

@section('title')
Home | Nanna Briyani
@endsection


@section('body')
<div class="container">



    <div class="py-3 title d-flex align-items-center">
    <h5 class="m-0">Most popular</h5>

    </div>

    <div class="most_popular">
    <div class="row">

        @foreach($foodList as $allFoodList)
    <div class="col-md-3 pb-4">
    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
    <div class="list-card-image">
    <div class="star position-absolute"><span class="badge text-bg-success">{{ $allFoodList->category_slug }}</span></div>

    <a href="{{ route('menuInformation') }}">
    <img alt="#" src="{{ asset('/') }}{{ 'public/'.$allFoodList->image }}" class="img-fluid item-img w-100">
    </a>
    </div>
    <div class="p-3 position-relative">
    <div class="list-card-body">
    <h6 class="mb-1"><a href="{{ route('menuInformation') }}" class="text-black">{{ $allFoodList->name }}
    </a>
    </h6>
    <p class="text-gray mb-1 small">{{ $allFoodList->detail }}</p>
    <p class="text-gray mb-1 rating">
    </p>

    <p></p>
    </div>
    <div class="list-card-badge">
    <span class="badge text-bg-danger">£ {{ $allFoodList->price }}</span>
    </div>
    </div>
    </div>
    </div>
    @endforeach

    </div>

    </div>


    </div>
@endsection

@section('script')

@endsection
