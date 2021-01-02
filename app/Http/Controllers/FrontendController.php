<?php

namespace App\Http\Controllers;

use App\Category;
use App\MakeMoney;
use App\SocialMedia;
use App\Subcategory;
use Illuminate\Http\Request;
use Auth;
use Darryldecode\Cart\Cart;
// use Cart;

class FrontendController extends Controller
{
    public function home()
    {

        $subcategory = Subcategory::where('status', 1)->get();
        $social = SocialMedia::where('status', 1)->get();
        $makepayment = MakeMoney::where('status', 1)->get();
        $category = Category::where('status', 1)->get();

        return view('frontend.home.page.maincontent', compact('category', 'subcategory', 'social', 'makepayment'));
    }
    public function addtocart(Request $request)
    {
        $product = SocialMedia::findOrFail($request->input('product_id'));
        $userID = Auth::user()->id;

        $id = $request->input('product_id');
        $data_id = \Cart::get($id);

        if ($data_id == null) {
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->social_name,
                'price' => $product->sell_price,
                'image' => '55',
                'quantity' => 1,
                'attributes' => array(),
                'model' => $product
            ));

            $data =  \Cart::getContent();
            $msg = 'New add';

            return response()->json(['data' => $data, 'message' => $msg], 200);

            return response($data, $msg);
            // \Cart::clear();
        } else {
            $data =  \Cart::getContent();
            $msg = 'already add';
            return response()->json(['data' => $data, 'message' => $msg], 200);
        }


        // \Cart::clear();
    }

    public function addtoocart($id)
    {

        $product = SocialMedia::findOrFail($id);
        $userID = Auth::user()->id;
        $data_id = \Cart::get($id);
        if ($data_id == null) {
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->social_name,
                'price' => $product->sell_price,
                'image' => '55',
                'quantity' => 1,
                'attributes' => array(),
                'model' => $product
            ));
        }

        return redirect()->route('cartpage');
    }

    public function category()
    {
        $category = Category::where('status', 1)->get();
        return view('frontend.home.page.category', compact('category'));
    }
    public function subcategory()
    {
        $category = Category::where('status', 1)->get();

        return view('frontend.home.page.subcategory', compact('category'));
    }


    public function singlesubcategory($id, $category_name)
    {
        if ($category_name == 'social_media') {
            $social = SocialMedia::where('subcategory_id', $id)->where('status', 1)->get();
            $makepayment = '';
            return view('frontend.home.page.singlesubcategory', compact('social', 'makepayment'));
        } elseif ($category_name == 'make_payment') {
            $makepayment = MakeMoney::where('subcategory_id', $id)->where('status', 1)->get();
            $social = '';
            return view('frontend.home.page.singlesubcategory', compact('social', 'makepayment'));
        }
    }

    public function addcartpage($id, $form_name)
    {
        if ($form_name == 'social_media') {
            $social = SocialMedia::where('id', $id)->where('status', 1)->first();
        }
        return view('frontend.home.page.addtocart', compact('social'));
    }
    public function product()
    {

        return view('frontend.home.page.product');
    }

    public function cartpage()
    {

        return view('frontend.home.page.cartpage');
    }
    public function checkout()
    {
        if (Auth::user() == '') {
            echo 'null';
        } else {
            return view('frontend.home.page.checkout');
        }
    }


    public function login()
    {
        return view('auth.login');
    }
}