<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
class SliderController extends Controller
{
    public function index(){

        $categoryList = Slider::latest()->get();
        return view('admin.slider.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title_one' => 'required',
            'title_two' => 'required',
            'button_name' => 'required',
            'small_image' => 'required',
            'big_image' => 'required',
        ]);


        $category =new Slider();
        $category->title_one = $request->title_one;
        $category->title_two = $request->title_two;
        $category->button_name =$request->button_name;
          if ($request->hasfile('small_image')) {

          $productImage = $request->file('small_image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(47,47);
            $img->save($imageUrl);

             $category->small_image =  'public/uploads/'.$imageName;

        }
        if ($request->hasfile('big_image')) {

            $productImage = $request->file('big_image');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(685,607);
              $img->save($imageUrl);

               $category->big_image =  'public/uploads/'.$imageName;

          }
        $category->save();
        return redirect()->route('slider.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Slider::find($id);
            $category->title_one = $request->title_one;
            $category->title_two = $request->title_two;
            $category->button_name =$request->button_name;
              if ($request->hasfile('small_image')) {

              $productImage = $request->file('small_image');
                $imageName = time().$productImage->getClientOriginalName();
                $directory = 'public/uploads/';
                $imageUrl = $directory.$imageName;

                $img=Image::make($productImage)->resize(47,47);
                $img->save($imageUrl);

                 $category->small_image =  'public/uploads/'.$imageName;

            }
            if ($request->hasfile('big_image')) {

                $productImage = $request->file('big_image');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(685,607);
                  $img->save($imageUrl);

                   $category->big_image =  'public/uploads/'.$imageName;

              }
            $category->save();
            return redirect()->route('slider.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Slider::where('id',$id)->delete();
        return redirect()->route('slider.index')->with('error','Deleted successfully!');
    }
}
