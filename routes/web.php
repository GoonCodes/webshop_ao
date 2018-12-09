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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function()
// {
//   return 'Shop homepage';
// });

// Route that shows an individual product by its ID
Route::get('products/{id}', function($id)
{
  return 'Product: '.$id;
});

// Route that handles submission of review - rating/comment
Route::post('products/{id}', array('before'=>'csrf', function($id)
{	
  return 'Review submitted for product '.$id;
}));