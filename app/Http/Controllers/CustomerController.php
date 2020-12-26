<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\MakeMoney;
use App\SocialMedia;
use App\Subcategory;
use Image;

class CustomerController extends Controller
{

    public function index()
    {

        return view('customer.pages.home');
    }
    public function product()
    {
        $category = Category::where('status', 1)->get();
        $social_media = SocialMedia::all();
        $make_money = MakeMoney::all();
        return view('customer.pages.product', compact('category', 'social_media', 'make_money'));
    }
    public function addproduct()
    {
        $category = Category::where('status', 1)->get();
        return view('customer.pages.add_product', compact('category'));
    }


    public function addproductlist(Request $request)
    {
        $subcategory = Subcategory::where('id', $request->subcategory_id)->where('category_id', $request->category_id)->where('status', 1)->first();

        // dd($category_id);
        return view('customer.pages.add_product_list', compact('subcategory'));
    }
    public function getsubcategory(Request $request)
    {
        $subcategory = Subcategory::where("category_id", $request->category_id)->where('status', 1)
            ->pluck("subcategory_name", "id");

        return response()->json($subcategory);
    }

    //----------------------------------------------------------------------------social media------------------------------------------------------------

    public function savesocialmedia(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',

        ]);

        $social_media_save = new SocialMedia();
        $social_media_save->category_id = $request->category_id;
        $social_media_save->subcategory_id = $request->subcategory_id;
        $social_media_save->social_name = $request->social_name;
        $social_media_save->social_link = $request->social_link;
        $social_media_save->friend_follower = $request->friend_follower;

        $social_media_save->sell_price = $request->sell_price;
        $social_media_save->description = $request->description;
        $social_media_save->status = $request->status;


        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 600)->save(public_path('back_end/social_images/' . $filename));
            $social_media_save->image = $filename;
        }

        $social_media_save->save();
        return redirect()->route('customer.product');
    }
    public function socialdelete($id)
    {
        SocialMedia::where('id', $id)->delete();
        return back();
    }

    public function socialstatus($id, $status)
    {
        $status_update = SocialMedia::where('id', $id)->first();
        if ($status == 0) {
            $status_update->update(['status' => 1]);
        } else {
            $status_update->update(['status' => 0]);
        }
        return back();
    }

    //----------------------------------------------------------------------------social media------------------------------------------------------------
    //----------------------------------------------------------------------------make money--------------------------------------------------------------
    public function savemakemoney(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',

        ]);

        $make_money_save = new MakeMoney();
        $make_money_save->category_id = $request->category_id;
        $make_money_save->subcategory_id = $request->subcategory_id;
        $make_money_save->send_currency = $request->send_currency;
        $make_money_save->send_wallet = $request->send_wallet;
        $make_money_save->send_account = $request->send_account;
        $make_money_save->get_currency = $request->get_currency;
        $make_money_save->get_wallet = $request->get_wallet;
        $make_money_save->get_account = $request->get_account;
        $make_money_save->sell_rate = $request->sell_rate;
        $make_money_save->purchase_rate = $request->purchase_rate;
        $make_money_save->your_amount = $request->your_amount;
        $make_money_save->description = $request->description;
        $make_money_save->status = $request->status;
        $make_money_save->save();
        return redirect()->route('customer.product');
    }
    //----------------------------------------------------------------------------make money--------------------------------------------------------------



}