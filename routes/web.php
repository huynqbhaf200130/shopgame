<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix'=>''], function(){
    Route::get('login',[UserController::class,'getLogin']);
    Route::post('login',[UserController::class,'postLogin']);
    Route::get('signup',[UserController::class,'getSignup']);
    Route::post('signup',[UserController::class,'postSignup']);
});

Route::group(['prefix'=>'user'], function(){
    Route::get('login',[UserController::class,'getLogin']);
    Route::post('login',[UserController::class,'postLogin']);
    Route::get('signup',[UserController::class,'getSignup']);
    Route::post('signup',[UserController::class,'postSignup']);
    Route::get('logout',[UserController::class,'getLogout']);
    Route::get('index',[UserController::class,'userindex']);
});
Route::group(['prefix' =>'admin'], function(){
    Route::get('managecategory/',[CategoryController::class,'getAddCategory']);
    Route::post('managecategory/',[CategoryController::class,'postAddCategory']);
    Route::get('editcategory/{category_id}',[CategoryController::class,'getEditCategory']);
    Route::post('editcategory/{category_id}',[CategoryController::class,'postEditCategory']);
    Route::get('deletecategory/{category_id}',[CategoryController::class,'deleteCategory']);
    Route::get('managecategory',[CategoryController::class,'listcategory']);
    
    
    Route::get('login',[UserController::class,'getLogin']);
    Route::post('login',[UserController::class,'postLogin']);
    Route::get('manageuser',[UserController::class,'getAllUser']);
    Route::get('logout',[UserController::class,'getLogout']);
    Route::get('index',[UserController::class,'adminindex']);
    
    Route::get('deleteuser/{user_id}',[UserController::class,'deleteUser']);


});
Route::group(['prefix' =>'admin'], function(){
    Route::get('manageproduct/',[ProductController::class,'getAddProduct']);
    Route::post('manageproduct/',[ProductController::class,'postAddProduct']);
    Route::get('manageproduct',[ProductController::class,'listProduct']);
    Route::get('manageproduct/{product_id}',[ProductController::class,'getEditProduct']);
    Route::post('manageproduct/{product_id}',[ProductController::class,'postEditProduct']);
    Route::get('deleteproduct/{product_id}',[ProductController::class,'deleteProduct']);
    Route::get('product-details',[ProductController::class,'ProductDetail']);
});