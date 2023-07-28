<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Category;
use App\Models\Food;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allOrder = Order::count();
        $totalPendingOrder = Order::where('order_status','Pending')->count();
        $totalMenu = Category::count();
        $totalFood = Food::count();
        return view('admin.index',compact('totalFood','totalMenu','allOrder','totalPendingOrder'));
    }
}
