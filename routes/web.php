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
Auth::routes();
Route::get('/', 'FrontendController@home');

Route::get('/login', 'FrontendController@login')->name('login');

Route::get('/logout-logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/signup ', 'FrontendController@signup');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'FrontendController@category')->name('category');
Route::get('/sub-category', 'FrontendController@subcategory')->name('subcategory');
Route::get('/single-subcategory/{id}/{category_id}', 'FrontendController@singlesubcategory')->name('singlesubcategory');


Route::get('/product', 'FrontendController@product')->name('product');

Route::get('/add-cart/{id}/{form_name}', 'FrontendController@addcartpage')->name('addcart');
Route::get('/cart-page', 'FrontendController@cartpage')->name('cartpage');
Route::get('/checkout-page', 'FrontendController@checkout')->name('checkout');
Route::post('/confirm-page', 'FrontendController@checkoutsave')->name('checkoutsave');
Route::post('/payment-complete', 'FrontendController@paymentcomplete')->name('paymentcomplete');



Route::post('/add-to-cart', 'FrontendController@addtocart')->name('addtocart');
Route::get('/add-too-cart/{id}', 'FrontendController@addtoocart')->name('addtoocart');


Route::group(['middleware' => ['auth', 'admin'],], function () {

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/admin-category', 'AdminController@category')->name('admin.category');
    Route::post('/admin-category-save', 'AdminController@categorysave')->name('admin.categorysave');
    Route::get('/admin-category-status/{status}/{id}', 'AdminController@categorystatus');
    Route::get('/admin-category-delete/{id}', 'AdminController@categorydelete');
    Route::get('/admin-category-edit/{id}', 'AdminController@categoryedit');
    Route::post('/admin-category-updated', 'AdminController@categoryupdated')->name('admin.categoryupdated');

    Route::get('/admin-sub-category', 'AdminController@subcategory')->name('admin.subcategory');
    Route::post('/admin-sub-category-save', 'AdminController@subcategorysave')->name('admin.subcategorysave');
    Route::get('/admin-sub-category-status/{status}/{id}', 'AdminController@subcategorystatus');
    Route::get('/admin-sub-category-delete/{id}', 'AdminController@subcategorydelete');
    Route::get('/admin-sub-category-edit/{id}', 'AdminController@subcategoryedit');
    Route::post('/admin-sub-category-updated', 'AdminController@subcategoryupdated')->name('admin.subcategoryupdated');
    Route::get('/admin-product-permission', 'AdminController@productpermission')->name('product_permission');
    Route::get('/admin-permission-make-payment', 'AdminController@permissionmakemoney')->name('permission_makemoney');
    Route::get('/admin-social-status/{id}/{status}', 'AdminController@socialstatus')->name('admin.social-status');
    Route::get('/admin-make-status/{id}/{status}', 'AdminController@makestatus')->name('admin.make-status');
});

Route::group(['middleware' => ['auth', 'customer'],], function () {

    Route::get('/customer', 'CustomerController@index')->name('customer');
    Route::get('/customer-product', 'CustomerController@product')->name('customer.product');


    Route::post('/get-add-product', 'CustomerController@addproduct')->name('customer.addpoduct');
    Route::post('/customer-save-socialmedia', 'CustomerController@savesocialmedia')->name('customer.savesocialmedia');

    Route::get('/customer-social-delete/{id}', 'CustomerController@socialdelete')->name('customer.social-delete');



    Route::post('/customer-save-payment', 'CustomerController@savemakepayment')->name('customer.savemakepayment');

    // Route::post('/customer-makemoney', 'CustomerController@makemoney')->name('customer.makemoney');
    // Route::get('/customer-save-product', 'CustomerController@saveproduct')->name('customer.saveproduct');

    Route::get('/get-subcategory-list', 'CustomerController@getsubcategory')->name('getsubcategory');
});