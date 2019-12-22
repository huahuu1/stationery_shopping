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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    // return response()->json([$name, $id]);
    // $products = [
    //     ['id' => 1, 'name' => 'product 1', 'price' => 100],
    //     ['id' => 2, 'name' => 'product 2', 'price' => 200],
    //     ['id' => 3, 'name' => 'product 3', 'price' => 300],
    //     ['id' => 4, 'name' => 'product 4', 'price' => 400]
    // ];
    // return $products;
//    $users = DB::table('users')->get();
 $users = User::all();
   // Query Builder
   return $users;
    return view('products.index', compact('products'));
});
 