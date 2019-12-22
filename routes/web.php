<?php

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


/**

*Author:Fessy
*Created: 12/17/2019

**/


Route::get('/',[
'uses' => 'ProductController@getWelcome',
'as' => 'product.welcome'

]);

Route::get('/shop',[
'uses' => 'ProductController@getShop',
'as' => 'product.shop'

]);
Route::get('/index',[
'uses' => 'ProductController@getIndex',
'as' => 'product.index'
]);


Route::get('/add-to-cart/{id}',[
'uses'=>'ProductController@getAddToCart',
'as'=>'product.addToCart'


]);

Route::get('/shopping-cart',[
'uses'=>'ProductController@getCart',
'as'=>'product.shoppingCart'

]);

Route::get('/checkout',[
'uses'=>'ProductController@getCheckout',
'as'=>'checkout',
'middleware'=>'auth'


]);

Route::post('/checkout',[
'uses'=>'ProductController@postCheckout',
'as'=>'checkout',
'middleware'=>'auth'


]);





Route::group(['prefix'=>'user'], function(){

Route::group(['middleware'=>'guest'], function(){


//Route::get('/signup',[
//'uses' => 'UserController@getSignup',
//'as' => 'user.signup'
//]);


//Route::post('/signup',[
//'uses' => 'UserController@postSignup',
//'as' => 'user.signup'
///]);
 



//signin route

//Route::get('/login',[
//'uses' => 'UserController@getLogin',
//'as' => 'user.login'

//]);



//Route::post('/login',[
//'uses' => 'UserController@postLogin',
//'as' => 'user.login'
//]);



});
 	

Route::group(['middleware'=>'auth'], function(){


Route::get('/profile',[
'uses' => 'UserController@getProfile',
'as' => 'user.profile'

]);





Route::get('/logout',[
'uses' => 'UserController@getLogout',
'as' => 'user.Logout'
]);



});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.home');


Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');