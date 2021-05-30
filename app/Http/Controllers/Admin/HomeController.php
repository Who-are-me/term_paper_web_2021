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

    public function index_entrant() {
        return view('admin.entrant.edit');   
    }

    public function index_students() {
        return view('admin.students.edit');   
    }
}
