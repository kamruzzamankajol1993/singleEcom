<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;
class TestimonialController extends Controller
{
    public function index(){

        $categoryList = Testimonial::latest()->get();
        return view('admin.testimonial.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'name' => 'required',
            'des' => 'required',
            'desi' => 'required',
            'image' => 'required',
        ]);


        $category =new Testimonial();
        $category->name = $request->name;
        $category->des = $request->des;
        $category->desi =$request->desi;
        if ($request->hasfile('image')) {

            $productImage = $request->file('image');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(110,110);
              $img->save($imageUrl);

               $category->image =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('testimonial.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Testimonial::find($id);
            $category->name = $request->name;
            $category->des = $request->des;
            $category->desi =$request->desi;
            if ($request->hasfile('image')) {

                $productImage = $request->file('image');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(110,110);
                  $img->save($imageUrl);

                   $category->image =  'public/uploads/'.$imageName;

              }
            $category->save();
            return redirect()->route('testimonial.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Testimonial::where('id',$id)->delete();
        return redirect()->route('testimonial.index')->with('error','Deleted successfully!');
    }
}
