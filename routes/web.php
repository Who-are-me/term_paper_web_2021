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
//     return view('test_welcome');
// });

// Route::get('/', function () {
//     return view('pages.welcome');
// });

// Route::get('/about_us', function () {
//     return view('pages.about');
// });

Route::get('/matbase', function () {
    return view('pages.base');
});

// Route::get('/to_entrant', function () {
//     return view('pages.entrant');
// });

Route::get('/student', function () {
    return view('pages.students');
});

Route::get('/contacts', function () {
    return view('pages.contact');
});

Auth::routes([
	'reset' => false 
]);

Route::get('/tidings', [App\Http\Controllers\Admin\NewsController::class, 'show']);

Route::get('/', [App\Http\Controllers\Admin\WelcomeController::class, 'show']);

Route::get('/about_us', [App\Http\Controllers\Admin\AboutController::class, 'show']);

Route::get('/to_entrant', [App\Http\Controllers\Admin\EntrantController::class, 'show']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'get_home'])->name('home'); 

Route::post('/feedbackstore', [App\Http\Controllers\Admin\FeedbackController::class, 'store']);

Route::post('/contactstore', [App\Http\Controllers\Admin\ContactController::class, 'store']);

Route::get('/backend', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin')->middleware(['auth']);

Route::resource('welcome', App\Http\Controllers\Admin\WelcomeController::class)->middleware(['auth']);

Route::resource('about', App\Http\Controllers\Admin\AboutController::class)->middleware(['auth']);

Route::resource('base', App\Http\Controllers\Admin\BaseController::class)->middleware(['auth']);

Route::resource('entrant', App\Http\Controllers\Admin\EntrantController::class)->middleware(['auth']);

Route::resource('students', App\Http\Controllers\Admin\StudentsController::class)->middleware(['auth']);

Route::resource('news', App\Http\Controllers\Admin\NewsController::class)->middleware(['auth']);

Route::resource('feedback', App\Http\Controllers\Admin\FeedbackController::class)->middleware(['auth']);

Route::resource('teachers', App\Http\Controllers\Admin\TeachersController::class)->middleware(['auth']);

Route::resource('contact', App\Http\Controllers\Admin\ContactController::class)->middleware(['auth']);


Route::middleware(['role:sudo'])->prefix('backend/register')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\RegisterAdminController::class, 'create']);
	Route::post('/', [App\Http\Controllers\Admin\RegisterAdminController::class, 'store']);
});

Route::middleware(['role:sudo'])->prefix('backend/user')->group(function() {
	Route::get('/', [App\Http\Controllers\Admin\RegisterAdminController::class, 'index']);
	Route::resource('action', App\Http\Controllers\Admin\RegisterAdminController::class);
});