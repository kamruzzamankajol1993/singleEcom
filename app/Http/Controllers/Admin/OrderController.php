<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use PDF;
use DB;
class OrderController extends Controller
{
    public function index(){

        $orderList = Order::where('order_status','Pending')->latest()->get();

        return view('admin.order.index',compact('orderList'));
    }

    public function allOrder(){
        $orderList = Order::latest()->get();

        return view('admin.order.allOrder',compact('orderList'));
    }

    public function update(Request $request,$id){



        $category =Order::find($id);
        $category->order_status = $request->order_status;

        $category->save();
        return redirect()->back()->with('success','Updated successfully!');

}

public function destroy($id){
    $category =Order::where('id',$id)->delete();
    return redirect()->back()->with('error','Deleted successfully!');
}

public function show($id){

    $order = DB::table('orders')->where('id','=',$id)
                ->first();
       $details = OrderDetail::where('order_id','=',$id)->get();
       $details_payment = Payment::where('order_id','=',$id)->first();
    return view('admin.order.view',['order'=>$order,'details'=>$details,'details_payment'=>$details_payment]);

}



public function orderPrint($id){
       $order = DB::table('orders')

                ->where('id','=',$id)
                ->first();
       $details = OrderDetail::where('order_id','=',$id)->get();
       $details_payment = Payment::where('order_id','=',$id)->first();
        $pdf=PDF::loadView('admin.order.pdf',['order'=>$order,'details'=>$details]);

        return $pdf->download('Order_Receipt.pdf');
}
}
