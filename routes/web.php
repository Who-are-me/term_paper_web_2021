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

// // test access for admin
Route::middleware(['role:admin'])->prefix('ta')->group(function() {
    Route::get('/', function() {
        return view('test_admin');
    });
});

Route::get('/', function () {
    return view('test_welcome');
});

Route::get('/news', function () {
    return view('news');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'get_home'])->name('home');

Route::get('/backend', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

Route::resource('newsAdmin', App\Http\Controllers\Admin\NewsController::class);

Route::resource('post', App\Http\Controllers\Admin\PostController::class);

// Route::get('glide/{path}', function($path){
//     $server = \League\Glide\ServerFactory::create([
//         'source' => app('filesystem')->disk('public')->getDriver(),
//     'cache' => storage_path('glide'),
//     ]);
//     return $server->getImageResponse($path, Input::query());
// })->where('path', '.+');
/////