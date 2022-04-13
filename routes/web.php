<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::get('index', function () {
    return view('index');
});
Route::get('user/index', function () {
    return view('index');
});

Route::group(['prefix'=>'user'], function(){
    Route::get('login',[UserController::class,'getLogin']);
    Route::post('login',[UserController::class,'postLogin']);
    Route::get('signup',[UserController::class,'getSignup']);
    Route::post('signup',[UserController::class,'postSignup']);
    Route::get('listUser',[UserController::class,'getAllUser']);
});
Route::group(['prefix' =>'admin'], function(){
    Route::get('addcategory/',[CategoryController::class,'getAddCategory']);
    Route::post('addcategory/',[CategoryController::class,'postAddCategory']);
    Route::get('listcategory',[CategoryController::class,'listcategory']);
    Route::get('editcategory/{category_id}',[CategoryController::class,'getEditCategory']);
    Route::post('editcategory/{category_id}',[CategoryController::class,'postEditCategory']);
    Route::get('delete/{category_id}',[CategoryController::class,'deleteCategory']);
});
Route::group(['prefix' =>'admin'], function(){
    Route::get('addproduct/',[CategoryController::class,'getAddProduct']);
    Route::post('addproduct/',[CategoryController::class,'postAddProduct']);
    Route::get('listproduct',[CategoryController::class,'listProduct']);
    Route::get('editproduct/{product_id}',[CategoryController::class,'getEditProduct']);
    Route::post('editproduct/{product_id}',[CategoryController::class,'postEditProduct']);
    Route::get('delete/{product_id}',[CategoryController::class,'deleteProduct']);
});