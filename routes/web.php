<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.layouts.app');
    });

    Route::get('/post', function () {
        return view('admin.posts.post');
    });

    Route::get('/category', function () {
        return view('admin.categories.category');
    });

    Route::get('/tag', function () {
        return view('admin.tags.tag');
    });
});


Route::get('/', function () {
    return view('user.blog');
});

Route::get('/post', function () {
    return view('user.post');
})->name('post');
