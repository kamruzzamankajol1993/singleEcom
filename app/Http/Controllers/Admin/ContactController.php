<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Image;
class ContactController extends Controller
{
    public function index(){

        $categoryList = Contact::latest()->get();
        return view('admin.contactUs.index',compact('categoryList'));
    }


    public function store(Request $request){


        $request->validate([
            'address' => 'required',
            'phone_one' => 'required',
            'phone_two' => 'required',
            'email_one' => 'required',
            'email_two' => 'required',
        ]);


        $category =new Contact();
        $category->address = $request->address;
        $category->phone_one = $request->phone_one;
        $category->phone_two =$request->phone_two;
        $category->email_one =$request->email_one;
        $category->email_two =$request->email_two;
        $category->save();
        return redirect()->route('contactUs.index')->with('success','Added successfully!');
    }


    public function update(Request $request,$id){



            $category =Contact::find($id);
            $category->address = $request->address;
        $category->phone_one = $request->phone_one;
        $category->phone_two =$request->phone_two;
        $category->email_one =$request->email_one;
        $category->email_two =$request->email_two;
            $category->save();
            return redirect()->route('contactUs.index')->with('success','Updated successfully!');

    }

    public function destroy($id){
        $category =Contact::where('id',$id)->delete();
        return redirect()->route('contactUs.index')->with('error','Deleted successfully!');
    }
}
