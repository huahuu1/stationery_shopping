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
Route::get('/add-to-cart', 'WebController@addToCart')->name('carts.add_to_cart');

Route::get('/products', function () {

 $users = User::all();
   // Query Builder
    return $users;
    return view('products.index', compact('products'));
});
Route::get('delete-all', function(){
    DB::table('products')->delete();
    echo 'delete all';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');