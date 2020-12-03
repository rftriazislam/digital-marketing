<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home.page.maincontent');
    }
    public function login(){
        return view('auth.login');
    }
}
