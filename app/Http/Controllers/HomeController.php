<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('layouts.admin_layout');
    }

    public function get_home() {
        return view('home');
    }

    public function get_login() {
        return view('auth.login');   
    }

    public function get_news() {
        $news = News::orderBy('created_at', 'desc')->get();

        $pag = News::simplePaginate(2);

        return view('pages.news',[
            'news' => $news,
        ], compact('pag'));   
    }
}
