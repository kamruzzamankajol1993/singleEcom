<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
class CartController extends Controller
{
    public function addToCart($id){

        $foodName = Food::where('id',$id)->value('name');
        $foodPrice = Food::where('id',$id)->value('price');
        $foodImage = Food::where('id',$id)->value('image');

        \Cart::add(array(
            'id' => $id,
            'name' => $foodName,
            'price' => $foodPrice,
            'quantity' =>1,
            'attributes' => array(
                'image' => $foodImage

            )
        ));

        return redirect()->back()->with('success', 'Item is Added to Cart!');
    }


    

    public function updateCart(Request $request){


        //dd($request->all());

        if($request->finalValue == 'plus'){

        $foodName = Food::where('id',$request->id)->value('name');
        $foodPrice = Food::where('id',$request->id)->value('price');
        $foodImage = Food::where('id',$request->id)->value('image');

        \Cart::add(array(
            'id' => $request->id,
            'name' => $foodName,
            'price' => $foodPrice,
            'quantity' =>1,
            'attributes' => array(
                'image' => $foodImage

            )
        ));
    }else{

        if($request->quantity == 1){
            \Cart::remove($request->id);

        }else{
            \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity -1
                ),
        ));

        }


    }
        return redirect()->back()->with('success', 'Item Updated!');
    }
}
