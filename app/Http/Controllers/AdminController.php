<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Category;
use App\Subcategory;
use Image;
class AdminController extends Controller
{
  
    public function index(){
        return view('admin.pages.home');
    }
    
    public function category(){
        $category_info=Category::OrderBy('id','desc')->paginate(10);
        return view('admin.pages.category',compact('category_info'));
    }

    public function categorysave(Request $request){
            $request->validate([
            'category_name'=>'required|unique:categories,category_name',
         ]);
            $category_add=New Category();
            $category_add->category_name=$request->category_name;
            if($request->hasfile('image')){
                $image = $request->file( 'image' );
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/category_images/' . $filename ) );
                $category_add->image = $filename;
            }      
        $category_add->save();
           return back()->with('message','Add Category');
    }

public function categorystatus($status,$id){
    $category_info = Category::find( $id );
    if ( $status == '0' ) {
        $category_info->status = '1';
    } else {
        $category_info->status = '0';
    }
    $category_info->save();
    return back()->with('message','Publication status Update');
}

public function categorydelete( $id ) {
    Category::find( $id )->delete();
    return back()->with( 'dmessage', ' Delete Category Successfully' );
}
public function categoryedit( $id ) {
    $category_info=Category::OrderBy('id','desc')->paginate(10);
    $category_edit = Category::find( $id );
    return view( 'admin.pages.categoryedit', compact( 'category_info', 'category_edit' ) );
}

public function categoryupdated( Request $request ) {

    $category_update = Category::find( $request->category_id );
    $category_update->category_name = $request->category_name;

    if($request->hasfile('image')){
        $image = $request->file( 'image' );
        $filename = $request->category_id . '.' . $image->getClientOriginalExtension();
        Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/category_images/' . $filename ) );
        $category_update->image = $filename;
    }

    $category_update->save();

    return redirect()->route('admin.category')->with( 'message', 'category updated' );
}
//-----------------------------------------------------------------------category---------------------------------------------------

//-----------------------------------------------------------------------subcategory---------------------------------------------------
public function subcategory(){
    $category_info=Category::where('status',1)->get();
    $subcategory_info=Subcategory::OrderBy('id','desc')->paginate(10);
    return view('admin.pages.subcategory',compact('subcategory_info','category_info'));

}
public function subcategorysave(Request $request){
    $request->validate([
    'subcategory_name'=>'required|unique:subcategories,subcategory_name',
    'subcategory_image'=>'required',

 ]);
    $subcategory_add=New Subcategory();
    $subcategory_add->category_id=$request->category_id;
    $subcategory_add->subcategory_name=$request->subcategory_name;
    if($request->hasfile('subcategory_image')){
        $image = $request->file( 'subcategory_image' );
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/subcategory_images/' . $filename ) );
        $subcategory_add->subcategory_image = $filename;
    }      
  $subcategory_add->save();

   return back()->with('message','Add sub Category');
} 

public function subcategorystatus($status,$id){
    $subcategory_info = Subcategory::find( $id );
    if ( $status == '0' ) {
        $subcategory_info->status = '1';
    } else {
        $subcategory_info->status = '0';
    }
    $subcategory_info->save();
    return back()->with('message','Publication status Update');
}

public function subcategorydelete( $id ) {
    Subcategory::find( $id )->delete();
    return back()->with( 'dmessage', ' Delete Category Successfully' );
}
public function subcategoryedit( $id ) {
    $category_info=Category::where('status',1)->get();
    $subcategory_info=Subcategory::OrderBy('id','desc')->paginate(10); 
    $subcategory_edit=Subcategory::find($id); 
    return view( 'admin.pages.subcategoryedit',compact('category_info','subcategory_info', 'subcategory_edit' ) );
}
public function subcategoryupdated( Request $request ) {

    $subcategory_update = Subcategory::find( $request->subcategory_id );
    $subcategory_update->category_id=$request->category_id;
    $subcategory_update->subcategory_name=$request->subcategory_name;

    if($request->hasfile('subcategory_image')){
        $image = $request->file( 'subcategory_image' );
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/subcategory_images/' . $filename ) );
        $subcategory_update->subcategory_image = $filename;
    } 

    $subcategory_update->save();

    return redirect()->route('admin.subcategory')->with( 'message', 'category updated' );
}

//-----------------------------------------------------------------------subcategory---------------------------------------------------

   
}