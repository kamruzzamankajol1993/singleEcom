<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipping;
use Image;
class ShippingController extends Controller
{
    public function index(){

        $categoryList = Shipping::latest()->get();
        return view('admin.shipping.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);


        $category =new Shipping();
        $category->title = $request->title;
        $category->price = $request->price;
        $category->save();
        return redirect()->route('shipping.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Shipping::find($id);
            $category->title = $request->title;
            $category->price = $request->price;
            $category->save();
            return redirect()->route('shipping.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Shipping::where('id',$id)->delete();
        return redirect()->route('shipping.index')->with('error','Deleted successfully!');
    }
}
