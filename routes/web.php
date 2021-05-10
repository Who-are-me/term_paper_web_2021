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

// default start page
// Route::get('/', function () {
//     return view('welcome');
// });

// vasya make start page
Route::get('/', function () {
    return view('test_welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// test access for user
Route::get('/testuser', function(){
    return view('test_user');
});

// test access for admin
Route::middleware(['role:admin'])->prefix('testadmin')->group(function() {
    Route::get('/', function() {
        return view('test_admin');
    });
});

// Route::get('/test', function() {
//     return view('test');
// });

// backend only for admin user
Route::middleware(['role:admin'])->prefix('backend')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); //       /admin

    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
});
