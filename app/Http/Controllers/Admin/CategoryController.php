<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){

        $categoryList = Category::latest()->get();
        return view('admin.category.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);


        $category =new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = Str::slug($request->name);
          if ($request->hasfile('image')) {

          $productImage = $request->file('image');
            $imageName = time().$productImage->getClientOriginalName();
            $directory = 'public/uploads/';
            $imageUrl = $directory.$imageName;

            $img=Image::make($productImage)->resize(1024,1024);
            $img->save($imageUrl);

             $category->image =  'uploads/'.$imageName;

        }
        $category->save();
        return redirect()->route('category.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Category::find($id);
            $category->name = $request->name;
            $category->status = $request->status;
            $category->slug = Str::slug($request->name);
              if ($request->hasfile('image')) {

              $productImage = $request->file('image');
                $imageName = time().$productImage->getClientOriginalName();
                $directory = 'public/uploads/';
                $imageUrl = $directory.$imageName;

                $img=Image::make($productImage)->resize(1024,1024);
                $img->save($imageUrl);

                 $category->image =  'uploads/'.$imageName;

            }
            $category->save();
            return redirect()->route('category.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Category::where('id',$id)->delete();
        return redirect()->route('category.index')->with('error','Deleted successfully!');
    }
}
