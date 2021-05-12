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

// // test access for user
// Route::get('/testuser', function(){
//     return view('test_user');
// });

// default start page
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/back', function(){
//     return view('auth.login');
// });

// // test access for admin
Route::middleware(['role:admin'])->prefix('ta')->group(function() {
    Route::get('/', function() {
        return view('test_admin');
    });
});

Route::get('/', function () {
    return view('test_welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'get_home'])->name('home');

//Route::get('/login', [App\Http\Controllers\HomeController::class, 'get_login'])->name('login');

Route::get('/backend', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');


// Route::get('/backend', function () {
//     Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');        //admin

//     Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

//     //return view('layouts.admin_layout');
// });


// Route::get('/backend', function () {
//     return view('layouts.admin_layout');
// });


// Route::middleware(['role:admin'])->prefix('backend')->group(function() {
//     Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

//     Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
// });