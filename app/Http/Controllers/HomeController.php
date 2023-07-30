<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Category;
use App\Models\Food;
use App\Models\Billing;
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
        $allOrder = Billing::count();
        $totalPendingOrder = Billing::where('status','Pending')->count();
        $totaldeliveredOrder = Billing::where('status','Delivered')->count();
        $totalCancelledOrder = Billing::where('status','Cancelled')->count();
        return view('admin.index',compact('totalCancelledOrder','totaldeliveredOrder','allOrder','totalPendingOrder'));
    }
}
