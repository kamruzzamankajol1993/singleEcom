@extends('admin.master.master')

@section('title')
Main Title
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Main Title</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Main Title</li>
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

            @if(count($categoryList) == 0)
            <button type="button" data-toggle="modal" data-target="#modal-default" class="btn  bg-gradient-primary"><i class="fas fa-plus"></i> Add</button>
            @else

            @endif

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Main Title</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('mainTitle.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="title" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Service Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="service_title" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">About Us Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="about_title" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Choose Us Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="choose_title" required>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Testimonial Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="tesi_title" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Product Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="product_title" required>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Billing Title</label>
                                        <input type="text" class="form-control"  placeholder="Title" name="billing_title" required>
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
                  <h3 class="card-title">Title List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Title</th>
                      <th>Service Title</th>
                      <th>About Title</th>
                      <th>Choose us Title</th>
                      <th>Testimonial Title</th>
                      <th>Product Title</th>
                      <th>Billing Title</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->title }}</td>
                      <td>{{ $allCategoryList->service_title }}</td>
                      <td>{{ $allCategoryList->about_title }}</td>
                      <td>{{ $allCategoryList->choose_title }}</td>
                      <td>{{ $allCategoryList->tesi_title }}</td>
                      <td>{{ $allCategoryList->product_title }}</td>
                      <td>{{ $allCategoryList->billing_title }}</td>

<td>

                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Main Title</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('mainTitle.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->title }}" placeholder="Title" name="title" required>
                                                </div>
                                            </div>



                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Service Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->service_title }}" placeholder="Title" name="service_title" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">About Us Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->about_title }}" placeholder="Title" name="about_title" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Choose Us Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->choose_title }}" placeholder="Title" name="choose_title" required>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Testimonial Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->tesi_title }}" placeholder="Title" name="tesi_title" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Product Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->product_title }}" placeholder="Title" name="product_title" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Billing Title</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->billing_title }}" placeholder="Title" name="billing_title" required>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('mainTitle.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
