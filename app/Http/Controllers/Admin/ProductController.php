<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;
class ProductController extends Controller
{
    public function index(){

        $categoryList = Product::latest()->get();
        return view('admin.product.index',compact('categoryList'));
    }


    public function store(Request $request){
//dd($request->all());

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'discount_per' => 'required',
            'des' => 'required',
            'image' => 'required',
        ]);


        $category =new Product();
        $category->name = $request->name;
        $category->des = $request->des;
        $category->price =$request->price;
        $category->discount_price =$request->discount_price;
        $category->discount_per =$request->discount_per;
        if ($request->hasfile('image')) {

            $productImage = $request->file('image');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(195,299);
              $img->save($imageUrl);

               $category->image =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('product.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Product::find($id);
            $category->name = $request->name;
        $category->des = $request->des;
        $category->price =$request->price;
        $category->discount_price =$request->discount_price;
        $category->discount_per =$request->discount_per;
        if ($request->hasfile('image')) {

            $productImage = $request->file('image');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(195,299);
              $img->save($imageUrl);

               $category->image =  'public/uploads/'.$imageName;

          }
            $category->save();
            return redirect()->route('product.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Product::where('id',$id)->delete();
        return redirect()->route('product.index')->with('error','Deleted successfully!');
    }
}
