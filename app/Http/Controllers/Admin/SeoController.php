<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use Image;
class SeoController extends Controller
{
    public function index(){

        $categoryList = Seo::latest()->get();
        return view('admin.seo.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'url' => 'required',
            'type' => 'required',
            'title' => 'required',
            'des' => 'required',
            'product_image' => 'required',
            'product_image_width' => 'required',
            'product_image_height' => 'required',
            'icon' => 'required',
        ]);


        $category =new Seo();
        $category->url = $request->url;
        $category->type = $request->type;
        $category->title =$request->title;
        $category->des =$request->des;
        $category->product_image_width =$request->product_image_width;
        $category->product_image_height =$request->product_image_height;
          if ($request->hasfile('product_image')) {

          $productImage = $request->file('product_image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(550,550);
            $img->save($imageUrl);

             $category->product_image =  'public/uploads/'.$imageName;

        }
        if ($request->hasfile('icon')) {

            $productImage = $request->file('icon');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(100,100);
              $img->save($imageUrl);

               $category->icon =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('seo.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Seo::find($id);
            $category->url = $request->url;
            $category->type = $request->type;
            $category->title =$request->title;
            $category->des =$request->des;
            $category->product_image_width =$request->product_image_width;
            $category->product_image_height =$request->product_image_height;
              if ($request->hasfile('product_image')) {

              $productImage = $request->file('product_image');
                $imageName = time().$productImage->getClientOriginalName();
                $directory = 'public/uploads/';
                $imageUrl = $directory.$imageName;

                $img=Image::make($productImage)->resize(550,550);
                $img->save($imageUrl);

                 $category->product_image =  'public/uploads/'.$imageName;

            }
            if ($request->hasfile('icon')) {

                $productImage = $request->file('icon');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(100,100);
                  $img->save($imageUrl);

                   $category->icon =  'public/uploads/'.$imageName;

              }
            $category->save();
            return redirect()->route('seo.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Seo::where('id',$id)->delete();
        return redirect()->route('seo.index')->with('error','Deleted successfully!');
    }
}
