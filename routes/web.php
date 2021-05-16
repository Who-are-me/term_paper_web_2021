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

Route::get('/', function () {
    return view('test_welcome');
});

Auth::routes();

Route::get('/tidings', [App\Http\Controllers\Admin\NewsController::class, 'show'])->name('news');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'get_home'])->name('home');

Route::get('/backend', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin')->middleware(['auth']);

Route::get('/backendLogin', [App\Http\Controllers\Admin\HomeController::class, 'login']);

//Route::post('/admin/register', 'App\Http\Controllers\Admin\HomeController@register');

Route::resource('news', App\Http\Controllers\Admin\NewsController::class);

Route::post('/test', [App\Http\Controllers\Admin\HomeController::class, 'register']);