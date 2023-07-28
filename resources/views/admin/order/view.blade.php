@extends('admin.master.master')

@section('title')
Order Info
@endsection


@section('body')
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Info</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Order Info</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">

          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Order From <b>{{ $order->person_name }} </b>

                <span class="badge badge-success">{{ $order->order_status }}</span>

              </h3>
            </div>
            <!-- /.card-header -->

          </div>
          <!-- /.card -->
       </div>
      </div>
    </section>
     <section class="content">
      <div class="row">
        <div class="col-4">
 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Customer Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <ul>
                <li><b>Name:</b> {{ $order->person_name }}</li>
                <li><b>Phone:</b> {{ $order->person_phone }}</li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>

       <div class="col-4">
        <div class="card">
                   <div class="card-header">
                     <h3 class="card-title">Payment  Information</h3>
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                     <ul>
                       <li><b>Payment Method:</b> {{ $details_payment->pay_type}}</li>

                     </ul>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
              </div>
        <div class="col-4">
 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Other Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <ul>

                 <li><b>Post Code:</b> {{ $order->delivery_address_id }}</li>
                <li style="color:red;"><b>Message:</b> {{ $order->suggestion }}</li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
      </div>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-12">
 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Order Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Item Name</th>
                  <th>Item Quantity</th>
                  <th>Item Price</th>
                  <th>Item sub-total</th>

             </tr>
                </thead>
                <tbody>
               @foreach($details as $key=>$category)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>
                    <?php  $users1 = DB::table('food')->where('id',$category->product_slug )->value('name');?>
                    {{ $users1 }}


                  </td>
                  <td>{{ $category->qty }} </td>
                  <td>
                    {{ $category->price }}
                  </td>
             <td>{{ $category->subtotal }}</td>
               </tr>
              @endforeach
            </tbody>


              </table>
             <h5 class="text-left" > Total Price: {{ $order->grandtotal }}</h5>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">

                  <div class="col-md-6 text-left"><a href="{{ route('orderPrint',['id'=>$order->id]) }}" type="button" class="btn btn-info">Print</a></div>
              </div>


            </div>
          </div>
          <!-- /.card -->
       </div>
      </div>
    </section>
 </div>
 <script type="text/javascript">
        function deleteTag(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
