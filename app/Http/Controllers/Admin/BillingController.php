<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billing;
use Image;
class BillingController extends Controller
{
    public function index(){

        $categoryList = Billing::latest()->get();
        return view('admin.billing.index',compact('categoryList'));
    }

    public function destroy($id){
        $category =Billing::where('id',$id)->delete();
        return redirect()->route('billing.index')->with('error','Deleted successfully!');
    }


    public function update(Request $request,$id){



        $category =Billing::find($id);
        $category->status = $request->status;

    $category->save();
        return redirect()->route('billing.index')->with('success','Updated successfully!');

}
}
