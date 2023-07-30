@extends('admin.master.master')

@section('title')
Seo Information
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Seo Information</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Seo Information</li>
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
            @if(count($categoryList) == 3)

            @else
            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn  bg-gradient-primary"><i class="fas fa-plus"></i> Add</button>
@endif
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Seo Information</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('seo.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Url</label>
                                        <input type="text" class="form-control"  placeholder="Url" name="url" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Type</label>
                                        <input type="text" class="form-control"  placeholder="Type" name="type" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="title" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Description</label>
                                        <input type="text" class="form-control"  placeholder="Description" name="des" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Product Image Width</label>
                                        <input type="text" class="form-control"  placeholder="Product Image Width" value="550" readonly name="product_image_width" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Product Image Height</label>
                                        <input type="text" class="form-control"  placeholder="Product Image Height" value="550" readonly name="product_image_height" required>
                                    </div>
                                </div>





                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Product Image</label>
                                        <input type="file" class="form-control" id="" placeholder="Image" name="product_image">

                                    </div>

                                    <small style="font-weight: 900;color:red;">Image Size:(550*550)px;format:png</small>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Icon</label>
                                        <input type="file" class="form-control" id="" placeholder="Image" name="icon">

                                    </div>
                                    <small style="font-weight: 900;color:red;">Image Size:(100*100)px;format:png</small>
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
                  <h3 class="card-title">Seo Information List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Url</th>
                      <th>Type</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Product Image</th>
                      <th>Product Image Width</th>
                      <th>Product Image Height</th>
                      <th>Logo </th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->url }}</td>
                      <td>{{ $allCategoryList->type }}</td>
                      <td>{{ $allCategoryList->title }}</td>
                      <td>{{ $allCategoryList->des }}</td>
                      <td><img src="{{ asset('/') }}{{$allCategoryList->product_image }}" style="height:50px;"/></td>
                      <td>{{ $allCategoryList->product_image_width }}</td>
                      <td>{{ $allCategoryList->product_image_height }}</td>
                      <td><img src="{{ asset('/') }}{{$allCategoryList->icon }}" style="height:50px;"/></td>
                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Seo Information</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('seo.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Url</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->url }}" placeholder="Url" name="url" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Type</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->type }}" placeholder="Type" name="type" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->title }}" placeholder="Title" name="title" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Description</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->des }}" placeholder="Description" name="des" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Product Image Width</label>
                                                    <input type="text" class="form-control" readonly value="{{ $allCategoryList->product_image_width }}" placeholder="Product Image Width" name="product_image_width" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Product Image Height</label>
                                                    <input type="text" class="form-control" readonly value="{{ $allCategoryList->product_image_height }}" placeholder="Product Image Height" name="product_image_height" required>
                                                </div>
                                            </div>





                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Product Image</label>
                                                    <input type="file" class="form-control" id="" placeholder="Image" name="product_image">
                                                    <img src="{{ asset('/') }}{{$allCategoryList->product_image }}" style="height:50px;"/>
                                                </div>
                                                <small style="font-weight: 900;color:red;">Image Size:(550*550)px;format:png</small>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Icon</label>
                                                    <input type="file" class="form-control" id="" placeholder="Image" name="icon">
                                                    <img src="{{ asset('/') }}{{$allCategoryList->icon }}" style="height:50px;"/>
                                                </div>
                                                <small style="font-weight: 900;color:red;">Image Size:(100*100)px;format:png</small>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('seo.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
