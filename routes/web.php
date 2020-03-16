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
Route::post('/add-to-cart', 'WebController@addToCart')->name('carts.add_to_cart');

Route::get('/products', function () {
    $users = User::all();
   // Query Builder
    return $users;
    return view('products.index', compact('products'));
});

Auth::routes();

// website page
Route::get('/home-page', 'HomePageController@index')->name('home-page');
Route::get('/categories/{name}', 'WebController@getProductsByCategoryId');
Route::get('/products/{item}', 'WebController@getProductDetail')->name('products.detail');

// admin page
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/carts/add-to-cart', 'WebController@addToCart')->name('carts.add_to_cart');