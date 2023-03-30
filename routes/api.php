<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('/category/{order}', [CategoryController::class, 'getAllCategory']);
Route::post('/category', [CategoryController::class, 'insertCategory']);
Route::post('/products', [ProductsController::class, 'insertProduct']);
=======
Route::post('/products', [ProductsController::class, 'insertProduct']);
Route::get('/products/{cant}', [ProductsController::class, 'paginationProducts']);
>>>>>>> octavopunto
