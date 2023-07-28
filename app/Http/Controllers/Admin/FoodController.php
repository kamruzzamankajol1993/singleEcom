<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Food;
class FoodController extends Controller
{
    public function index(){

        $foodList = Food::latest()->get();
        return view('admin.food.index',compact('foodList'));
    }


    public function create(){

        $categoryList = Category::latest()->get();
        return view('admin.food.create',compact('categoryList'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'category_slug' => 'required',
            'image' => 'required',
            'price' => 'required',
        ]);


        $category =new Food();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->category_slug = $request->category_slug;
        $category->detail = $request->detail;
        $category->price = $request->price;
        $category->type = $request->type;
        $category->slug = Str::slug($request->name);
          if ($request->hasfile('image')) {

          $productImage = $request->file('image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(508,320);
            $img->save($imageUrl);

             $category->image =  'uploads/'.$imageName;

        }
        $category->save();
        return redirect()->route('food.index')->with('success','Added successfully!');
    }


    public function edit($id){
        $categoryList = Category::latest()->get();
        $foodList = Food::where('id',$id)->first();
        return view('admin.food.edit',compact('foodList','categoryList'));
    }


    public function update(Request $request,$id){




        $category =Food::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->category_slug = $request->category_slug;
        $category->detail = $request->detail;
        $category->price = $request->price;
        $category->type = $request->type;
        $category->slug = Str::slug($request->name);
          if ($request->hasfile('image')) {

          $productImage = $request->file('image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(508,320);
            $img->save($imageUrl);

             $category->image =  'uploads/'.$imageName;

        }
        $category->save();
        return redirect()->route('food.index')->with('success','Updated successfully!');
    }

    public function destroy($id){
        $category =Food::where('id',$id)->delete();
        return redirect()->route('food.index')->with('error','Deleted successfully!');
    }
}
