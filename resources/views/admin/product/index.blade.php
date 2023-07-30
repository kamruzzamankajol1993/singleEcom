@extends('admin.master.master')

@section('title')
Product
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
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

        <div class="col-md-6">
            @if(count($categoryList) == 1)

            @else
            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn  bg-gradient-primary"><i class="fas fa-plus"></i> Add</button>
@endif
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Product</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('product.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control"  placeholder="Name" name="name" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Price</label>
                                        <input type="number" class="form-control"  placeholder="Price" name="price" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Discount Price</label>
                                        <input type="number" class="form-control"  placeholder="Discount Price" name="discount_price" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Discount Percentage</label>
                                        <input type="number" class="form-control"  placeholder="Discount Percentage" name="discount_per" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Description</label>
                                        <textarea class="textarea" name="des" placeholder="Place some text here"
                                        style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>




                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label"> Image</label>
                                        <input type="file" class="form-control" id="" placeholder="Image" name="image">

                                    </div>
                                    <small style="font-weight: 900;color:red;">Image Size:(195*299)px;format:png</small>
                                </div>



                            </div>

                            <button type="submit" class="btn btn-success mt-4">Submit</button>

                        </form>
                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
        </div>

      </div>
      <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Discount Price</th>
                      <th>Discount Percentage</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->name }}</td>
                      <td>{{ $allCategoryList->price }}</td>
                      <td>{{ $allCategoryList->discount_price }}</td>
                      <td>{{ $allCategoryList->discount_per }}</td>
                      <td>{!! $allCategoryList->des !!}</td>

                      <td><img src="{{ asset('/') }}{{$allCategoryList->image }}" style="height:50px;"/></td>
                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Product</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('product.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Name</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->name }}" placeholder="Name" name="name" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Price</label>
                                                    <input type="number" class="form-control" value="{{ $allCategoryList->price }}" placeholder="Price" name="price" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Discount Price</label>
                                                    <input type="number" class="form-control" value="{{ $allCategoryList->discount_price }}" placeholder="Discount Price" name="discount_price" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Discount Percentage</label>
                                                    <input type="number" class="form-control" value="{{ $allCategoryList->discount_per }}" placeholder="Discount Percentage" name="discount_per" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Description</label>
                                                    <textarea class="textarea" name="des" placeholder="Place some text here"
                                                    style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $allCategoryList->des !!}</textarea>
                                                </div>
                                            </div>




                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label"> Image</label>
                                                    <input type="file" class="form-control" id="" placeholder="Image" name="image">
                                                    <img src="{{ asset('/') }}{{$allCategoryList->image }}" style="height:50px;"/>
                                                </div>
                                                <small style="font-weight: 900;color:red;">Image Size:(195*299)px;format:png</small>
                                            </div>









                                        </div>

                                        <button type="submit" class="btn btn-success mt-4">Update</button>

                                    </form>
                                </div>

                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->



                        <button   type="button" class="btn btn-danger waves-light waves-effect  " onclick="deleteTag({{ $allCategoryList->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('product.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
