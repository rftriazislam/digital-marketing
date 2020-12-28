<?php

namespace App\Http\Controllers;

use App\Category;
use App\MakeMoney;
use App\SocialMedia;
use App\Subcategory;
use Illuminate\Http\Request;

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


    public function category()
    {
        return view('frontend.home.page.category');
    }
    public function subcategory()
    {
        return view('frontend.home.page.subcategory');
    }
    public function product()
    {
        return view('frontend.home.page.product');
    }





    public function login()
    {
        return view('auth.login');
    }
}