<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
class CustomerController extends Controller
{

    public function index(){
        
        return view('customer.pages.home');
    }
    public function product(){
        
        return view('customer.pages.product');
    }
    public function addproduct(){
        $category=Category::where('status',1)->get();
        return view('customer.pages.add_product',compact('category'));
    }


    public function getsubcategory(Request $request){
        $subcategory =Subcategory::
        where("category_id",$request->category_id)->where('status',1)
        ->pluck("subcategory_name","id");
        
        return response()->json($subcategory);
    }
}