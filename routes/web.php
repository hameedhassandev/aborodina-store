<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middleware'=> 'PreventBackHistory'])->group(function (){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('all-products',[ProductController::class,'list'])->name('product.list');
    Route::get('add-product',[ProductController::class,'create'])->name('product.add');
    Route::post('add-product',[ProductController::class,'store'])->name('product.store');
    Route::get('delete-product/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('update-product/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('all-categories',[CategoryController::class,'list'])->name('category.list');
    Route::post('add-category',[CategoryController::class,'create'])->name('category.add');
    Route::get('delete-category/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('update-category/{id}',[CategoryController::class,'update'])->name('category.update');
});


Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function (){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

