@extends('admin.master.master')

@section('title')
Slider
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Slider</li>
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
                      <h4 class="modal-title">Add Slider</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('slider.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Title One</label>
                                        <input type="text" class="form-control"  placeholder="Title One" name="title_one" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Title Two</label>
                                        <input type="text" class="form-control"  placeholder="Title Two" name="title_two" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Button Name</label>
                                        <input type="text" class="form-control"  placeholder="Button Name" name="button_name" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Small Image</label>
                                        <input type="file" class="form-control" id="" placeholder="Image" name="small_image">

                                    </div>
                                    <small style="font-weight: 900;color:red;">Image Size:(47*47)px;format:png</small>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Big Image</label>
                                        <input type="file" class="form-control" id="" placeholder="Image" name="big_image">

                                    </div>
                                    <small style="font-weight: 900;color:red;">Image Size:(685*607)px;format:png</small>
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
                  <h3 class="card-title">Slider List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Title One</th>
                      <th>Title Two</th>
                      <th>Button Name</th>
                      <th>Small Image</th>
                      <th>Big Image</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->title_one }}</td>
                      <td>{{ $allCategoryList->title_two }}</td>
                      <td>{{ $allCategoryList->button_name }}</td>
                      <td><img src="{{ asset('/') }}{{$allCategoryList->small_image }}" style="height:50px;"/></td>
                      <td><img src="{{ asset('/') }}{{$allCategoryList->big_image }}" style="height:50px;"/></td>
                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Slider</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('slider.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Title One</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->title_one }}" placeholder="Title One" name="title_one" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Title Two</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->title_two }}" placeholder="Title Two" name="title_two" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Button Name</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->button_name }}" placeholder="Button Name" name="button_name" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Small Image</label>
                                                    <input type="file" class="form-control" id="" placeholder="Image" name="small_image">
                                                    <img src="{{ asset('/') }}{{$allCategoryList->small_image }}" style="height:50px;"/>
                                                </div>
                                                <small style="font-weight: 900;color:red;">Image Size:(47*47)px;format:png</small>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Big Image</label>
                                                    <input type="file" class="form-control" id="" placeholder="Image" name="big_image">
                                                    <img src="{{ asset('/') }}{{$allCategoryList->big_image }}" style="height:50px;"/>
                                                </div>
                                                <small style="font-weight: 900;color:red;">Image Size:(685*607)px;format:png</small>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('slider.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
