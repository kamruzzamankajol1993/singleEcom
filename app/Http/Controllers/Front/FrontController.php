<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use Session;
class FrontController extends Controller
{
    public function index(){
        $categoryList = Category::latest()->get();

        $foodList = Food::where('type','Yes')->inRandomOrder()->limit(8)->get();
        return view('front.index',compact('categoryList','foodList'));
    }


    public function menuInformation(){
        $cartCollection = \Cart::getContent();
        $categoryList = Category::latest()->get();
        return view('front.menuInformation',compact('categoryList','cartCollection'));
    }

    public function popularItem(){
        $foodList = Food::where('type','Yes')->inRandomOrder()->limit(8)->get();
        return view('front.popularItem',compact('foodList'));

    }

    public function orderList(){


        $foodList = Order::where('person_phone',Session::get('person_phone'))->latest()->get();
      
        return view('front.orderList',compact('foodList'));
    }
}
