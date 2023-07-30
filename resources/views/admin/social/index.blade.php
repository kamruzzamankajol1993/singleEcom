@extends('admin.master.master')

@section('title')
Social
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Social</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Social</li>
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
                      <h4 class="modal-title">Add Social</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('social.store') }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                            @csrf

                            <div class="row">
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Link</label>
                                        <input type="text" class="form-control" placeholder="Link" name="link" required>
                                    </div>
                                </div>





                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <label for="" class="form-label">Title</label>
                                       <select class="form-control" name="title">
                                        <option value="Facebook" >Facebook</option>
                                        <option value="Twitter" >Twitter</option>
                                        <option value="Youtube" >Youtube</option>
                                        <option value="Instagram">Instagram</option>
                                       </select>
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
                  <h3 class="card-title">Social List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Link</th>

                      <th>Title</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->link }}
                      </td>

                      <td>{{ $allCategoryList->title }}</td>
                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Social</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('social.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Link</label>
                                                    <input type="text" class="form-control" value="{{ $allCategoryList->link }}" placeholder="Link" name="link" required>
                                                </div>
                                            </div>





                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Title</label>
                                                   <select class="form-control" name="title">
                                                    <option value="Facebook" {{ $allCategoryList->title == 'Facebook' ? 'selected':'' }}>Facebook</option>
                                                    <option value="Twitter" {{ $allCategoryList->title == 'Twitter' ? 'selected':'' }}>Twitter</option>
                                                    <option value="Youtube" {{ $allCategoryList->title == 'Youtube' ? 'selected':'' }}>Youtube</option>
                                                    <option value="Instagram" {{ $allCategoryList->title == 'Instagram' ? 'selected':'' }}>Instagram</option>
                                                   </select>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('social.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
