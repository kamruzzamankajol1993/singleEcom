<div class="bg-primary p-3 d-none">
    <div class="text-white">
    <div class="title d-flex align-items-center">
    <a class="toggle" href="#">
    <span></span>
    </a>
    <h4 class="fw-bold m-0 ps-5">Browse</h4>
    <a class="text-white fw-bold ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Filter</a>
    </div>
    </div>
    <div class="input-group bg-white rounded shadow-sm mt-3">
    <span class="input-group-text bg-transparent border-0 rounded-0"><i class="feather-search"></i></span>
    <input type="text" class="form-control bg-transparent border-0 rounded-0 px-0 shadow-none" placeholder="Enter Your Location" aria-label="Enter Your Location">
    </div>
    </div>

     <div class="bg-success">
    <div class="container">
    <div class="cat-slider">

        @foreach($categoryList as $allCategoryList)
    <div class="cat-item px-1 py-3">
    <div class="bg-white rounded position-relative p-2 text-center shadow-sm">
    <img src="{{ asset('/') }}{{ 'public/'.$allCategoryList->image }}" class="img-fluid rounded-3 p-3" alt="...">
    <div class="listing-card-body pt-0">
    <h6 class="card-title mb-1 fs-14">{{ $allCategoryList->name }}</h6>
    <?php
$totalitem = DB::table('food')->where('category_slug',$allCategoryList->slug)->count();

    ?>
    <p class="card-text small text-success">{{ $totalitem }} Items</p>
    </div>
    <a href="{{ route('menuInformation') }}" class="stretched-link"></a>
    </div>
    </div>
    @endforeach

    </div>
    </div>
    </div>
