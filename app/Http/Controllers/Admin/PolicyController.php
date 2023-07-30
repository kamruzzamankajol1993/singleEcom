<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;
class PolicyController extends Controller
{
    public function index(){

        $categoryList = Policy::latest()->get();
        return view('admin.policy.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'return_policy' => 'required',
            'privacy_policy' => 'required',
            'term_condition' => 'required',

        ]);


        $category =new Policy();
        $category->return_policy = $request->return_policy;
        $category->privacy_policy = $request->privacy_policy;
        $category->term_condition = $request->term_condition;
        $category->save();
        return redirect()->route('policy.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Policy::find($id);
            $category->return_policy = $request->return_policy;
            $category->privacy_policy = $request->privacy_policy;
            $category->term_condition = $request->term_condition;
            $category->save();
            return redirect()->route('policy.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Policy::where('id',$id)->delete();
        return redirect()->route('policy.index')->with('error','Deleted successfully!');
    }
}
