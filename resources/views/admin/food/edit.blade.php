@extends('admin.master.master')

@section('title')
Update Food
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">update Food</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update Food</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Update Food</h3>
                  @include('flash_message')
                </div>

                <div class="card-body">
                    <form action="{{ route('food.update',$foodList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Category</label>
                                   <select class="form-control" name="category_slug">
@foreach($categoryList as $allCategoryList)

                                    <option value="{{ $allCategoryList->slug }}" {{ $foodList->category_slug == $allCategoryList->slug ? 'selected':'' }}>{{ $allCategoryList->name }}</option>
                                    @endforeach

                                   </select>
                                </div>
                            </div>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $foodList->name }}" placeholder="Name" name="name" required>
                                </div>
                            </div>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="" placeholder="Image" name="image" >

                                    <img src="{{ asset('/') }}{{ 'public/'.$foodList->image }}" style="height:50px;"/>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Price</label>
                                    <input type="text" class="form-control" value="{{ $foodList->price }}" placeholder="Price" name="price" required>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Product Detail</label>
                                    <input type="text" class="form-control" value="{{ $foodList->detail }}" placeholder="Detail" name="detail" >
                                </div>
                            </div>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Show On Home Page</label>
                                   <select class="form-control" name="type">
                                    <option value="Yes" {{ $foodList->type == 'Yes' ? 'selected':'' }}>Yes</option>
                                    <option value="No" {{ $foodList->type == 'No' ? 'selected':'' }}>No</option>
                                   </select>
                                </div>
                            </div>


                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="" class="form-label">Status</label>
                                   <select class="form-control" name="status">
                                    <option value="Active" {{ $foodList->type == 'Active' ? 'selected':'' }}>Active</option>
                                    <option value="InActive" {{ $foodList->type == 'InActive' ? 'selected':'' }}>InActive</option>
                                   </select>
                                </div>
                            </div>



                        </div>

                        <button type="submit" class="btn btn-success mt-4">Update</button>

                    </form>
                </div>

            </div>
        </div>

      </div>

    </div>

  </section>
@endsection

@section('script')
@endsection
