<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\ChooseUs;
class ChooseController extends Controller
{
    public function index(){

        $categoryList = ChooseUs::latest()->get();
        return view('admin.chooseUs.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title_one' => 'required',
            'title_two' => 'required',
            'animate_title' => 'required',
            'image' => 'required',
            'image_one' => 'required',
        ]);


        $category =new ChooseUs();
        $category->title_one = $request->title_one;
        $category->title_two = $request->title_two;
        $category->animate_title =$request->animate_title;
          if ($request->hasfile('image')) {

          $productImage = $request->file('image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(502,266);
            $img->save($imageUrl);

             $category->image =  'public/uploads/'.$imageName;

        }
        if ($request->hasfile('image_one')) {

            $productImage = $request->file('image_one');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(222,270);
              $img->save($imageUrl);

               $category->image_one =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('choose.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =ChooseUs::find($id);
            $category->title_one = $request->title_one;
        $category->title_two = $request->title_two;
        $category->animate_title =$request->animate_title;
          if ($request->hasfile('image')) {

          $productImage = $request->file('image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(502,266);
            $img->save($imageUrl);

             $category->image =  'public/uploads/'.$imageName;

        }
        if ($request->hasfile('image_one')) {

            $productImage = $request->file('image_one');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(222,270);
              $img->save($imageUrl);

               $category->image_one =  'public/uploads/'.$imageName;

          }
        $category->save();
            return redirect()->route('choose.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =ChooseUs::where('id',$id)->delete();
        return redirect()->route('choose.index')->with('error','Deleted successfully!');
    }
}
