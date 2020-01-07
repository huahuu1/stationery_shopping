<?php
use App\User;
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

Route::get('/', function(){
    return redirect()->route('dashboard');
});
// Product Routes
Route::get('/products', 'ProductController@index')->name('products.index');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::get('/products/create', 'ProductController@create')->name('products.create');


// Category Routes
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::post('/categories', 'CategoryController@store')->name('categories.store');

Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');

Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/products', function () {

//  $users = User::all();
//    // Query Builder
//    return $users;
//     return view('products.index', compact('products'));
// });
 