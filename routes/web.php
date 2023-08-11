<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::name('admin.')->group(function () {
    // rotues middleware admin group
    Route::middleware(['auth'])->group(function () {
        // permission resource routes
        Route::resource('/permissions', App\Http\Controllers\PermissionController::class); 
        // role resource routes
        Route::resource('/roles', App\Http\Controllers\RoleController::class);
        // user resource routes
        Route::resource('/users', App\Http\Controllers\UsersController::class);
        // profile resource rotues
        Route::resource('/profiles', App\Http\Controllers\ProfileController::class);
        // product resource route
        Route::resource('/products', App\Http\Controllers\ProductController::class);
        Route::put('/publish-update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'publishUpdate'])->name('publish-update');
        // Route::put('/product-update/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Productupdate'])->name('product-update');

        Route::resource('/events', App\Http\Controllers\EventCalendarController::class);
        Route::resource('/motionvideos', App\Http\Controllers\MotionVideoController::class);
        Route::resource('/artphotos', App\Http\Controllers\ArtPhotoController::class);
    });
});