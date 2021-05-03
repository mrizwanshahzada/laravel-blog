<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPostController;
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


//Admin routes

Route::group(['prefix' => 'admin',], function() {

    Route::get('/home', [AdminHomeController::class,'index'])->name('admin.home');

    // Post Route
    Route::resource('post', AdminPostController::class);

    // category route
    Route::resource('category', CategoryController::class);

    // tag route
    Route::resource('tag', TagController::class);

    //admin user route
    Route::resource('user', UserController::class);

});

//User routes

Route::get('/',[HomeController::class,'index']);

Route::get('/post', [PostController::class,'index'])->name('post');
