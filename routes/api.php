<?php
use App\Author;
use App\Blog;
use App\Product;
use App\Category;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/authors', function()
{
    return AuthorResource::collection(Author::get());
});


Route::get('/blogs', function()
{
    return BlogResource::collection(Blog::get());
});


Route::get('/products', function()
{
    return ProductResource::collection(Product::get());
});

Route::get('/categories', function()
{
    return CategoryResource::collection(Category::get());
});

Route::get('/oneofauthors', function()
{
    return new AuthorResource(Author::find(10));
});