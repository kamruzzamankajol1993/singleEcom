<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
class SocialController extends Controller
{
    public function index(){

        $categoryList = Social::latest()->get();
        return view('admin.social.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'title' => 'required',
            'link' => 'required',

        ]);


        $category =new Social();
        $category->title = $request->title;
        $category->link = $request->link;
        $category->save();
        return redirect()->route('social.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Social::find($id);
            $category->title = $request->title;
            $category->link = $request->link;
            $category->save();
            return redirect()->route('social.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Social::where('id',$id)->delete();
        return redirect()->route('social.index')->with('error','Deleted successfully!');
    }
}
