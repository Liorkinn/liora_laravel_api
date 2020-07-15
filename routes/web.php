<?php
use App\User;
use App\Product;
use App\Category;
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

Route::get('/', "IndexController@Index");

Route::get('/test', function()
{
    return response()->json(Product::get());
});

Route::get('/test1', function()
{
    $products = Product::get();
    dd($products);
});