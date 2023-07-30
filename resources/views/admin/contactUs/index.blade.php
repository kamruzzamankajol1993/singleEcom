@extends('admin.master.master')

@section('title')
Contact Us
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contact Us</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
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

            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn  bg-gradient-primary"><i class="fas fa-plus"></i> Add</button>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Contact Us</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('contactUs.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Phone One</label>
                                        <input type="text" class="form-control"  placeholder="Phone One" name="phone_one" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Phone Two</label>
                                        <input type="text" class="form-control"  placeholder="Phone Two" name="phone_two" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Email One</label>
                                        <input type="text" class="form-control"  placeholder="Email One" name="email_one" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Email Two</label>
                                        <input type="text" class="form-control"  placeholder="Email Two" name="email_two" required>
                                    </div>
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
                  <h3 class="card-title">Contact Us List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Address</th>
                      <th>Email One</th>
                      <th>Email Two</th>
                      <th>Phone One</th>
                      <th>Phone Two</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->address }}</td>
                      <td>{{ $allCategoryList->email_one }}</td>
                      <td>{{ $allCategoryList->email_two }}</td>
                      <td>{{ $allCategoryList->phone_one }}</td>
                      <td>{{ $allCategoryList->phone_two }}</td>

                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Contact Us</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('contactUs.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Address</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->address }}" placeholder="Address" name="address" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Phone One</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->phone_one }}" placeholder="Phone One" name="phone_one" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Phone Two</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->phone_two }}" placeholder="Phone Two" name="phone_two" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Email One</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->email_one }}" placeholder="Email One" name="email_one" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Email Two</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->email_two }}" placeholder="Email Two" name="email_two" required>
                                                </div>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('contactUs.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
