<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somet hing great!
|
*/



Route::resource('/cart', 'CartController');



Route::get('/cart',[
	'uses'=>'HomePagesController@getCart',
	'as'=>'homepage.shoppigCart']);
//women page
Route::get('/women',[
	'uses'=>'HomePagesController@womenindex',
	'as'=>'homepage.women']);
//men page
Route::get('/men',[
	'uses'=>'HomePagesController@menindex',
	'as'=>'homepage.men']);





//baby
Route::get('/baby',[
	'uses'=>'HomePagesController@babyindex',
	'as'=>'homepage.women']);
//electronicindex page
Route::get('/electronic',[
	'uses'=>'HomePagesController@electronicindex',
	'as'=>'homepage.electronicindex']);





Route::get('/checkout',[
	'uses'=>'HomePagesController@GetCheckout',
	'as'=>'homepage.checkout'])->middleware('auth');

Route::post('/postcheckout',[
	'uses'=>'HomePagesController@postCheckout',
	'as'=>'homepage.postcheckout'])->middleware('auth');


Route::get('/userindex',[
	'uses'=>'UsersController@getCart',
	'as'=>'homepage.shoppigCart']);

Route::get('/downloadPDF/pdf',[
	'uses'=>'ProductsController@downloadPDF',
	'as'=>'product.index']);

Route::get('/order_pro/pdf',[
	'uses'=>'OrdersController@downloadPDF',
	'as'=>'order.pdf']);

Route::get('/order_pdf/pdf1',[
	'uses'=>'OrdersController@order_pdf',
	'as'=>'order.pdf1']);



Route::get('/user/pdf',[
	'uses'=>'Order_RequestsController@downloadPDF',
	'as'=>'print_special_order']);
//Route::get('/downloadPDF/{id}','OrdersController@downloadPDF');


Route::resource('/user', 'Order_RequestsController')->middleware('auth');
Route::resource('/order', 'OrdersController')->middleware('auth');


Route::get('/order_product',[
	'uses'=>'OrdersController@order_product',
	'as'=>'order.order_product'])->middleware('auth');

Route::get('/order/{id}/vieworder',[
	'uses'=>'OrdersController@vieworder'])->middleware('auth');

Route::get('/userorder',[
	'uses'=>'OrdersController@userorder',
	'as'=>'user.userorder'])->middleware('auth');




Route::get('/reqshow',[
	'uses'=>'Order_RequestsController@adminshow',
	'as'=>'user.admin_view_req'])->middleware('auth');



Route::resource('/checkoutss', 'CheckoutsController')->middleware('auth');

Route::resource('/', 'HomePagesController');
Route::resource('/homepage', 'HomePagesController');
Route::resource('/admin', 'AdminController')->middleware('auth');

Route::resource('/product', 'ProductsController');
Route::resource('/category', 'CategorysController');
Route::resource('/sub_category', 'Sub_CategorysController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/userS', 'UsersController');

Route::get('/userlist',[
	'uses'=>'UsersController@listindex',
	'as'=>'user.listindex'])->middleware('auth');

Route::resource('/image', 'ImagesController')->middleware('auth');
//SEARCH

Route::post('/search', 'HomePagesController@search')->name('search');