<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainTitle;
class MainTitleController extends Controller
{
    public function index(){

        $categoryList = MainTitle::latest()->get();
        return view('admin.mainTitle.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title' => 'required',
        ]);


        $category =new MainTitle();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('mainTitle.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =MainTitle::find($id);
            $category->title = $request->title;
            $category->save();
            return redirect()->route('mainTitle.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =MainTitle::where('id',$id)->delete();
        return redirect()->route('mainTitle.index')->with('error','Deleted successfully!');
    }
}
