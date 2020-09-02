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

Route::get('/','PageController@homefun')->name('homepage');

 Route::get('brand','PageController@brandfun')->name('brandpage');

 Route::get('itemdetail','PageController@itemdetailfun')->name('itemdetailpage');

 Route::get('loginpage','PageController@loginfun')->name('loginpage');
 Route::get('promotion','PageController@promotionfun')->name('promotionpage');
Route::get('registerpage','PageController@registerfun')->name('registerpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('subcategory','PageController@subcategoryfun')->name('subcategorypage');
Route::resource('items','ItemController');
Route::resource('orders','OrderController');
Route::middleware('role::Admin')->group(function(){
	Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');


});



// Route::middleware('auth')->group(function(){
// Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
// Route::resource('items','ItemController');
// });


// Route::get('testing/{id}/{name}','PageController@testingfun')->name('testingpage');


Auth::routes();

Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('/home', 'HomeController@index')->name('home');
