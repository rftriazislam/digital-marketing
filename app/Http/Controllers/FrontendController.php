<?php

namespace App\Http\Controllers;

use App\Category;
use App\MakeMoney;
use App\SocialMedia;
use App\Subcategory;
use Illuminate\Http\Request;
use Auth;

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
        $cart = session()->has('cart') ? session()->get('cart') : [];
        if (array_key_exists($product->id, $cart)) {
            $cart[$product->id]['quantity']++;
            // $cart[$product->sell_rate]['sell_rate']++;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'quantity' => 1,
                'unit_price' => $product->sell_price,
            ];
        }
        session(['cart' => $cart]);
        session()->flash('message', $product->id . ' added to cart.');

        $data = [];
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];

        return response()->json($data);
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
        if (Auth::user() == '') {
            echo 'null';
        } else {
            return view('frontend.home.page.cartpage');
        }
    }
    public function checkout()
    {
        return view('frontend.home.page.checkout');
    }


    public function login()
    {
        return view('auth.login');
    }
}