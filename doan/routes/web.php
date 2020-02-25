<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Utils\UrlUtil;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',['as'=>'/','uses'=>'HomeController@renderProduct']);
Route::post('/loginHome','HomeController@getLogin');
Route::post('/login',['as'=>'login','uses'=>'HomeController@postLogin']);
Route::get('/login','HomeController@getLogin2');
Route::post('/register','HomeController@postRegister');
Route::get('product/{id}', 'HomeController@detail_product');
Route::post('comment','HomeController@comment');
Route::get('/category/{categoryID}','HomeController@renderProductByCategory');
Route::get('/contact','HomeController@renderContact');

/**
 * middleware auth for admin routes
 */
Route::group(['middleware' => ['MyAuth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('','AdminPageController@renderAdminPage');
        Route::get('manageStaff','AdminPageController@renderStaff');
        Route::get('manageUser','AdminPageController@renderUser');
        Route::get('category','AdminPageController@renderCategory');
        Route::get('manageProduct','AdminPageController@renderProduct')->name('manageProduct');
        Route::get('bill', 'AdminPageController@renderBill');
    });
 });

/**
 * login page
 */
Route::get('admin/login', "AdminPageController@loginPage");
Route::post('/loginAdmin','AuthController@login');

/**
 * send email page
 */
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

/**
 * shopping cart
 */
Route::post('/cart', 'CartController@add');
Route::get('/increaseCartItem/{id}', 'CartController@increaseCartItem');
Route::get('/decreaseCartItem/{id}', 'CartController@decreaseCartItem');

Route::get('/checkout', 'CartController@checkout');

//search
Route::get('/search','HomeController@getSearch');

//thank you
Route::get('/thankyou',function(){
    return view('thankyou');
});
