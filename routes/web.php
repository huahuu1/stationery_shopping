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

Route::get('/', function () {
    return view('welcome');
});

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