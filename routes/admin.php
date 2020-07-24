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
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');

// Category Routes
Route::get('/categories', 'CategoryController@index')->name('categories.index');
// Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
// Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
// Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
// Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');
// Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

// Supplier Routes
Route::get('/suppliers', 'SupplierController@index')->name('suppliers.index');
// Route::get('/suppliers/create', 'SupplierController@create')->name('suppliers.create');
// Route::post('/suppliers', 'SupplierController@store')->name('suppliers.store');
Route::get('/suppliers/{id}', 'SupplierController@show')->name('suppliers.show');
// Route::get('/suppliers/{id}/edit', 'SupplierController@edit')->name('suppliers.edit');
// Route::put('/suppliers/{id}', 'SupplierController@update')->name('suppliers.update');
// Route::delete('/suppliers/{id}', 'SupplierController@destroy')->name('suppliers.destroy');


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Users Routes
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
// Route::post('/users', 'UserController@postCreate')->name('users.postCreate');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
// Route::put('/users/{id}', 'UserController@postEdit')->name('users.postEdit');
// Route::put('/users/{id}', 'UserController@updateInfo')->name('users.update-info');
Route::post('/users/{id}', 'UserController@updatePassword')->name('users.update-pass');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

// Orders Routes
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');

Route::post('/orders', 'OrderController@store')->name('orders.store');

Route::get('/orders/{id}', 'OrderController@show')->name('orders.show');
Route::get('/orders/edit/{id}', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{id}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{id}', 'OrderController@destroy')->name('orders.destroy');
Route::delete('/orders/{id}/{product_id}', 'OrderController@removeProductFromCart')->name('orders.removeProductFromCart');

// Order_Product Routes
// Route::get('/order_product', 'OrderProductController@index')->name('order_product.index');
// Route::get('/order_product/create', 'OrderProductController@create')->name('order_product.create');
// Route::post('/order_product', 'OrderProductController@store')->name('order_product.store');
// Route::get('/order_product/{id}', 'OrderProductController@show')->name('order_product.show');
// Route::get('/order_product/{id}/edit', 'OrderProductController@edit')->name('order_product.edit');
// Route::put('/order_product/{id}', 'OrderProductController@update')->name('order_product.update');
// Route::delete('/order_product/{id}', 'OrderProductController@destroy')->name('order_product.destroy');


