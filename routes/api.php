<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\categoryController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("store/category",[categoryController::class, "store"]);
Route::put("update/category/{id}",[categoryController::class, "update"]);
Route::get("all/categories",[categoryController::class, "index"]);
Route::post("store/product",[ProductController::class, "store"]);
Route::get("all/products",[ProductController::class, "index"]);
