<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products',[ProductController::class,'index']);
Route::get('/customers',[CustomerController::class,'index']);
Route::post('/customers',[CustomerController::class,'store']);
Route::post('active_customer',[CustomerController::class,'activeCustomer']);
Route::post('/cart/deleteItemById',[CartItemController::class,'deleteItemById']);
Route::post('/order', [OrderController::class, 'store'])->name('create-order');

