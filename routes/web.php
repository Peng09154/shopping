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

// Route::get('/', function () {
//     return view('welcome');
// });

//-------------前臺----------------
Route::get('/success',function(){
	return view('success');
});

Route::get('/', 'CgyController@showCgys');

Route::get('cgys/showProducts/{id}', 'CgyController@showProducts');



//-------------後台----------------

Route::prefix('backend')->group(function(){

	Route::get('cgys/del/{cgy}','CgyController@destroy');
	Route::resource('cgys', 'CgyController');

	Route::get('products/del/{product}','ProductController@destroy');
	Route::resource('products', 'ProductController');

	Route::get('carousels/del/{carousel}','CarouselController@destroy');
	Route::resource('carousels', 'CarouselController');

	Route::get('orders/send/{id}','OrderController@create');
	Route::resource('orders', 'OrderController');

});












Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
