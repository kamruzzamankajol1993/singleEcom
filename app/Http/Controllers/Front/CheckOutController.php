<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use App\Models\ZipCode;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderDetail;
use Session;
class CheckOutController extends Controller
{
    public function checkOut(){
        $cartCollection = \Cart::getContent();
        return view('front.checkOut',compact('cartCollection'));
    }

    public function checkZipCode(Request $request){

        $data = ZipCode::where('name',$request->thisVal)->count();
        return $data;

    }



    public function finalSubmit(Request $request){

        Session::put('person_phone', $request->person_phone);

            $mainOrder = new Order();
            $mainOrder->order_d ='NaBUK-'.rand('10000000','99999999');
            $mainOrder->delivery_address_id =  $request->postCode;
            $mainOrder->person_name =$request->person_name;
            $mainOrder->person_phone =$request->person_phone;
            $mainOrder->suggestion =$request->suggestion;
            $mainOrder->subtotal=\Cart::getTotal();
            $mainOrder->grandtotal=\Cart::getTotal();
            $mainOrder->order_status ='Pending';
            $mainOrder->save();

            $orderId=$mainOrder->id;
$pinNum = $mainOrder->order_d;

            $mainOrder1 = new Payment();
            $mainOrder1->card_number = $request->cardNumber;
            $mainOrder1->cvv_number = $request->cvvNumber;
            $mainOrder1->order_id =  $orderId;
            $mainOrder1->name_on_card = $request->NameOnCard;
            if(empty($request->cardNumber)){
            $mainOrder1->pay_type =  'Cash On Delivery';
            }else{

                $mainOrder1->pay_type =  'Online Payment';
            }
            $mainOrder1->save();


               $cartCollection = \Cart::getContent();
         foreach ($cartCollection as $cartProduct){

             $order= new OrderDetail();
             $order->product_slug = $cartProduct->id;
             $order->order_id = $orderId;
             $order->qty = $cartProduct->quantity;
             $order->price =$cartProduct->price;
             $order->subtotal = \Cart::get($cartProduct->id)->getPriceSum();

             $order->save();


         }






        \Cart::clear();

        return redirect('successPage/'.$pinNum);

    }

    public function successPage($id){

$pinNum = $id;
        return view('front.success',compact('pinNum'));


    }
}
