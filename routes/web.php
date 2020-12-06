<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@home');

Route::get('/login','FrontendController@login');

Route::get('/signup ','FrontendController@signup');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'FrontendController@category')->name('category');
Route::get('/sub-category', 'FrontendController@subcategory')->name('subcategory');

Route::get('/product', 'FrontendController@product')->name('product');


Route::group(['middleware' => ['auth', 'admin'],], function () {

    Route::get('/admin', 'AdminController@index')->name('admin');



});

Route::group(['middleware' => ['auth', 'customer'],], function () {

    Route::get('/customer', 'CustomerController@index')->name('customer');


});