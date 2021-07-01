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


Route::middleware('adminAuth')->group(function()
{
	Route::get('/dashboard/logout','AuthController@logout')->name('logout');
Route::get('/mobiles','CatController@mobiles')->name('mobiles');
Route::get('/camera','CatController@camera')->name('camera');
Route::get('/laptop','CatController@laptop')->name('laptop');
Route::post('/message/newsletter','MessageController@newsletter')->name('newsletter');
Route::post('/message/contact','MessageController@contact')->name('contact2');
Route::get('/dashboard','HomeController@index2')->name('home');

	
	Route::get('/stripe-payment','CatController@handleGet')->name('stripe');
Route::post('/stripe-payment','CatController@handlePost')->name('stripe.payment');
	
	Route::get('/shopping-cart','CatController@showCart')->name('show');
	Route::get('/cart/{id}','CatController@cart')->name('cart');



});
Route::get('/contact','CatController@contact')->name('contact');

Route::get('/clothes','CatController@clothes')->name('clothes');

Route::get('/','HomepageController@index')->name('homepage');

Route::get('/register','AuthController@register')->name('register');
Route::post('/register','AuthController@handleregister')->name('handleregister');


Route::get('/dashboard/login','AuthController@login')->name('login');
Route::post('/dashboard/do-login','AuthController@doLogin')->name('doLogin');


Route::get('/confirm','CatController@confirm')->name('co');
Route::post('/confirm','CatController@co')->name('confirm');
Route::get('/confirm-cart','CatController@con')->name('con');
Route::get('/addToCart/{c}','CatController@addToCart')->name('add');

Route::get('/Addcart','CatController@Addcart')->name('Addcart');
//Route::post('/Addtocart','CatController@Addcartt')->name('Addcartt');
Route::get('/products','HomeController@index')->name('index');

//Route::post('/Addnewcart/{m}','CatController@Addnewcart')->name('Addnewcart');

	Route::post('/pay','CatController@pay')->name('pay');

Route::delete('/products/{product}','CatController@destroy')->name('remove');
Route::put('/products/{product}','CatController@update')->name('update');










