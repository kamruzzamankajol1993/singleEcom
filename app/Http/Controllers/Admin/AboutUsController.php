<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Image;
class AboutUsController extends Controller
{
    public function index(){

        $categoryList = AboutUs::latest()->get();
        return view('admin.aboutUs.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title_one' => 'required',
            'title_two' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'button_name' => 'required',
        ]);


        $category =new AboutUs();
        $category->title_one = $request->title_one;
        $category->title_two = $request->title_two;
        $category->price =$request->price;
        $category->discount =$request->discount;
        $category->button_name =$request->button_name;
        if ($request->hasfile('image')) {

            $productImage = $request->file('image');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(367,509);
              $img->save($imageUrl);

               $category->image =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('aboutUs.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =AboutUs::find($id);
            $category->title_one = $request->title_one;
            $category->title_two = $request->title_two;
            $category->price =$request->price;
            $category->discount =$request->discount;
            $category->button_name =$request->button_name;
            if ($request->hasfile('image')) {

                $productImage = $request->file('image');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(367,509);
                  $img->save($imageUrl);

                   $category->image =  'public/uploads/'.$imageName;

              }
            $category->save();
            return redirect()->route('aboutUs.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =AboutUs::where('id',$id)->delete();
        return redirect()->route('aboutUs.index')->with('error','Deleted successfully!');
    }
}
