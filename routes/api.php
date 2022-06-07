<?php

use App\Http\Controllers\ProdutcController;
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


// Route::get('products', [ProdutcController::class, 'index']);
// Route::post('products', [ProdutcController::class, 'store']);
Route::post('products', [ProdutcController::class, 'store']);

// Route::prefix('products')->controller(ProdutcController::class)->group(function () {
//     Route::get('index');
//     Route::post('store');
// });
Route::controller(ProdutcController::class)->group(function () {
    Route::get('products', 'index');
    Route::post('products', 'store');
    Route::get('products/{id}', 'show');
    // Route::post('update/products/{id}', 'update');
    Route::delete('products/{id}', 'delete');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::prefix('products')->controller(ProdutcController::class)->group(function () {
//     Route::get('index');
// });
