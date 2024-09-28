<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\UserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("create/user",[UserController::class, "create"]);
Route::post("store/user",[UserController::class, "store"])->name("store.user");
Route::get("/index/user",[UserController::class, "index"])->name("index.user");
Route::get("edit/user/{id}",[UserController::class, "edit"])->name("edit.user");
Route::post("update/user",[UserController::class, "update"])->name("update.user");
Route::get("delete/user/{id}",[UserController::class, "delete"])->name("delete.user");
Route::get("login/form",[UserController::class, "show_login"])->name("login.form");
Route::post("login/user",[UserController::class, "login"])->name("login.user");
Route::get("create/category",[CategoryController::class, "create"])->name("create.category");
Route::post("store/category",[CategoryController::class, "store"])->name("store.category");
Route::get("create/product",[ProductController::class, "create"])->middleware("admin");
Route::post("store/product",[ProductController::class, "store"])->name("store.product");

Route::get("index/product",[ProductController::class, "index"]);
Route::post("addtocat{id}",[CartController::class, "addtocart" ])->name("addtocart");
Route::get("show/cart",[CartController::class, "showcart"])->name("showcart");
Route::post("cash",[OrderController::class, "cash"])->name("cashh");






