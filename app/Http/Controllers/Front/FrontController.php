<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use Session;
use App\Models\MainTitle;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Social;
class FrontController extends Controller
{
    public function index(){
        $categoryList = Category::latest()->get();

        $foodList = Food::where('type','Yes')->inRandomOrder()->limit(8)->get();
        $mainTitle = MainTitle::first();
        $sliderList = Slider::latest()->get();
        $contactList = Contact::latest()->first();
        $socialList = Social::latest()->get();
        return view('front.index',compact('socialList','contactList','mainTitle','sliderList'));
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
