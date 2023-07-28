@extends('admin.master.master')

@section('title')
Food
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Food</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Food</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-md-6">
            <a type="button" href="{{ route('food.create') }}" class="btn  bg-gradient-primary"><i class="fas fa-plus"></i> Add</a>



        </div>

      </div>
      <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Food List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Category Name</th>
                      <th>Food Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Detail</th>
                      <th>Type</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($foodList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        {{ $allCategoryList->category_slug }}
                      </td>

                      <td>
                        {{ $allCategoryList->name }}
                      </td>


                      <td><img src="{{ asset('/') }}{{ 'public/'.$allCategoryList->image }}" style="height:50px;"/></td>

                      <td>{{ $allCategoryList->price }}</td>
                      <td>{{ $allCategoryList->detail }}</td>
                      <td>{{ $allCategoryList->type }}</td>
                      <td>{{ $allCategoryList->status }}</td>
                      <td>


                        <a type="button" href="{{ route('food.edit',$allCategoryList->id) }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></a>


                        <button   type="button" class="btn btn-danger waves-light waves-effect  " onclick="deleteTag({{ $allCategoryList->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('food.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
                      @method('DELETE')
                                                    @csrf

                                                </form>
                      </td>
                    </tr>
                    @endforeach

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>

      </div>

    </div>

  </section>
@endsection

@section('script')
@endsection
