<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){

        $categoryList = Service::latest()->get();
        return view('admin.service.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'icon_name' => 'required',
            'title' => 'required',
            'des' => 'required',
            'background_color' => 'required',
        ]);


        $category =new Service();
        $category->icon_name = $request->icon_name;
        $category->title = $request->title;
        $category->des =$request->des;
        $category->background_color =$request->background_color;
        $category->save();
        return redirect()->route('service.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Service::find($id);
            $category->icon_name = $request->icon_name;
            $category->title = $request->title;
            $category->des =$request->des;
            $category->background_color =$request->background_color;
            $category->save();
            return redirect()->route('service.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Service::where('id',$id)->delete();
        return redirect()->route('service.index')->with('error','Deleted successfully!');
    }
}
