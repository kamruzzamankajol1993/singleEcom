<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ZipCode;
class ZipcodeController extends Controller
{
    public function index(){

        $categoryList = ZipCode::latest()->get();
        return view('admin.zipCode.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);


        $category =new ZipCode();
        $category->name = $request->name;
        $category->address = $request->address;
        $category->save();
        return redirect()->route('zipCode.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =ZipCode::find($id);
            $category->name = $request->name;
            $category->address = $request->address;

            $category->save();
            return redirect()->route('zipCode.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =ZipCode::where('id',$id)->delete();
        return redirect()->route('zipCode.index')->with('error','Deleted successfully!');
    }
}
