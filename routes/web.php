<?php
use App\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', 'WebController@index')->name('web.index');
// Route::get('/', 'WebController@getCategoriesByParentId')->name('web.getCategoriesByParentId');
Route::post('/add-to-cart', 'WebController@addToCart')->name('carts.add_to_cart');

// Route::get('/products', function () {

//  $users = User::all();
//    // Query Builder
//     return $users;
//     return view('products.index', compact('products'));
// });

Auth::routes();

// website page
Route::get('/home-page', 'HomePageController@index')->name('home-page');
Route::get('/categories', 'WebController@getCategories')->name('categories.all');
Route::get('/categories/{name}', 'WebController@getProductsByCategoryId')->name('categories.detail');
Route::get('/products/{item}', 'WebController@getProductDetail')->name('products.detail');
Route::get('/products', 'WebController@getProducts')->name('products.all');

Route::get('/cart-detail', 'WebController@emptyCart')->name('cart.empty');

Route::get('/cart-detail/{id}', 'WebController@getCartDetail')->middleware('isLogin')->name('carts.detail');

Route::post('/place-new-order', 'WebController@placeNewOrder')->middleware('isLogin')->name('orders.place_order');
// Route::post('/carts/add-to-cart', 'WebController@addToCart')->name('carts.add_to_cart');

Route::post('/carts/add-to-cart/{id}', 'ProductController@addToCart')->middleware('isLogin')->name('carts.add_to_cart');
Route::patch('update-cart', 'ProductController@updateCart');
Route::delete('remove-from-cart', 'ProductController@removeCart');

// admin page
Route::get('/home', 'HomeController@index')->name('home');
