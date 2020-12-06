<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home.page.maincontent');
    }


public function category(){
    return view('frontend.home.page.category');
}
public function subcategory(){
    return view('frontend.home.page.subcategory');
}
public function product(){
    return view('frontend.home.page.product');
}





    public function login(){
        return view('auth.login');
    }
}