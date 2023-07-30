@extends('admin.master.master')

@section('title')
Order
@endsection


@section('body')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Order</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order</li>
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


        </div>

      </div>
      <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Order List</h3>
                  @include('flash_message')
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Order Id</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Area</th>
                      <th>Address</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Ship Price</th>
                      <th>Total Price</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryList as $key=>$allCategoryList)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $allCategoryList->order_id }}</td>
                      <td>{{ $allCategoryList->name }}</td>
                      <td>{{ $allCategoryList->phone }}</td>
                      <td>{{ $allCategoryList->area }}</td>
                      <td>{{ $allCategoryList->address }}</td>
                      <td>{{ $allCategoryList->quantity }}</td>
                      <td>{{ $allCategoryList->price }}</td>
                      <td>{{ $allCategoryList->ship_price }}</td>
                      <td>{{ $allCategoryList->total_price }}</td>
                      <td>{{ $allCategoryList->status }}</td>
                      <td>


                        <button type="button" data-toggle="modal" data-target="#modal-default{{ $allCategoryList->id }}" class="btn  bg-gradient-primary"><i class="fas fa-edit"></i></button>

                        <div class="modal fade" id="modal-default{{ $allCategoryList->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Update Status</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('billing.update',$allCategoryList->id) }}"  method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">

                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="" class="form-label">Status</label>
                                                   <select class="form-control" name="status">
                                                    <option value="Pending" {{ $allCategoryList->status == 'Pending' ? 'selected':'' }}>Pending</option>
                                                    <option value="Confirmed" {{ $allCategoryList->status == 'Confirmed' ? 'selected':'' }}>Confirmed</option>
                                                    <option value="Cancelled" {{ $allCategoryList->status == 'Cancelled' ? 'selected':'' }}>Cancelled</option>
                                                    <option value="Delivered" {{ $allCategoryList->status == 'Delivered' ? 'selected':'' }}>Delivered</option>
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
                    <form id="delete-form-{{ $allCategoryList->id }}" action="{{ route('billing.destroy',$allCategoryList->id) }}" method="POST" style="display: none;">
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
