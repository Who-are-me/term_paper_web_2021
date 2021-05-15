<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $news_count = News::all()->count();

        return view('admin.home.index', [
            'news_count' => $news_count
        ]);
    }
}
