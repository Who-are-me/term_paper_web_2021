<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $news_count = News::all()->count();
        $feedback_count = Feedback::all()->count();

        return view('admin.home.index', [
            'news_count' => $news_count,
            'feedback_count' => $feedback_count
        ]);
    }

    // public function login() {
    //     return view('admin.home.login');   
    // }

    // public function register() {
    //     return view('admin.home.register');   
    // }
}
