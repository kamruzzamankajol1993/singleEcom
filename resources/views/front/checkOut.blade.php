@extends('front.master.master')

@section('title')
Check Out | Nanna Briyani
@endsection


@section('body')
<form method="post" action="{{ route('finalSubmit') }}">
    @csrf
<div class="container position-relative">
    <div class="py-5 row g-4">
    <div class="col-md-8">
    <div>

    <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
    <div class="osahan-card bg-white border-bottom overflow-hidden">
    <div class="osahan-card-header" id="headingOne">
    <h2 class="mb-0">
    <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <i class="feather-credit-card me-3"></i> Credit/Debit Card
    <i class="feather-chevron-down ms-auto"></i>
    </button>
    </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="osahan-card-body border-top p-3">
    <h6 class="m-0">Add new card</h6>
    <p class="small">WE ACCEPT <span class="osahan-card ms-2 fw-bold">( Master Card
    / Visa Card )</span></p>
    <form>
    <div class="form-row">
    <div class="col-md-12 form-group mb-3">
    <label class="form-label fw-bold small">Card number</label>
    <div class="input-group">
    <input placeholder="Card number" name="cardNumber" type="number" class="form-control">
    <button class="btn btn-outline-secondary" type="button"><i class="feather-credit-card"></i></button>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col-md-8 form-group"><label class="form-label fw-bold small">Valid
    through(MM/YY)</label><input name="validMonth" placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
    <div class="col-md-4 form-group">
        <label class="form-label fw-bold small">CVV</label>
        <input placeholder="Enter CVV Number" name="cvvNumber" type="number" class="form-control"></div>
    </div>
    <div class="col-md-12 form-group mb-3">
        <label class="form-label fw-bold small">Name on card</label>
        <input placeholder="Enter Card number"name="NameOnCard" type="text" class="form-control"></div>
    <div class="col-md-12 form-group mb-0">
    <div class="form-check custom-checkbox">
    <input class="form-check-input" type="checkbox" value="" id="custom-Check1">

    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <div class="osahan-card bg-white overflow-hidden">
    <div class="osahan-card-header" id="headingThree">
    <h2 class="mb-0">
    <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    <i class="feather-dollar-sign me-3"></i> Cash on Delivery
    <i class="feather-chevron-down ms-auto"></i>
    </button>
    </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="card-body border-top p-3">
    <h6 class="mb-3 mt-0 fw-bold">Cash</h6>
    <p class="m-0">Please keep exact change handy to help us serve you better</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
        <img alt="osahan" src="{{ asset('/') }}logo/logo.jpeg" class="me-3 rounded-circle img-fluid">
        <div class="d-flex flex-column">
        <h6 class="mb-1 fw-bold">Nanna Briyani</h6>
        <p class="mb-0 small text-muted"><i class="feather-map-pin"></i>London</p>
        @include('flash_message');
        </div>
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
        <input placeholder="Enter Person Name"  name="person_name" type="text" class="form-control" required>

        <input placeholder="Enter Person Phone"  name="person_phone" type="text" class="form-control mt-2" required>
    <div class="input-group input-group-sm mb-2">


    <input placeholder="Enter Post code" id="postCode" name="postCode" type="text" class="form-control mt-2" required>
    {{-- <button class="btn btn-primary" type="button" id="button-addon2"><i class="feather-search"></i> Search</button> --}}

    </div>
    <small id="showresult"></small>
    <div class="input-group">
    <span class="input-group-text" id="message"><i class="feather-message-square"></i></span>
    <textarea name="suggestion" placeholder="Any suggestions? We will pass it on..." aria-label="With textarea" class="form-control"></textarea>
    </div>
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
    <button type="submit" id="finalSubmit" class="btn btn-success w-100 btn-lg" >Confirm<i class="feather-arrow-right"></i></button>
    </div>
    </div>
    </div>
    </div>
</form>
@endsection

@section('script')

<script>
    $("#postCode").keyup(function(){

        var thisVal = $(this).val();
       // alert(thisVal);

        $.ajax({
            url: "{{ route('checkZipCode') }}",
            method: 'GET',
            data: {thisVal:thisVal},
            success: function(data) {

                if(data >  0){

                    $("#showresult").html('We Are Available In this Area');
              $("#finalSubmit").show();


                }else{

                    $("#showresult").html('We Are Not Available In this Area');
              $("#finalSubmit").hide();
                }


            }
        });
});
</script>

@endsection
