<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $news = News::orderBy('created_at', 'desc')->get();

        $pag = News::simplePaginate(10);

        return view('admin.news.index', [
            'news' => $news,
        ], compact('pag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = New News();
        $news->title = $request->title;   
        $news->text = $request->text;
        $news->img = $request->img;

        $news->save();

        return redirect()->back()->withSuccess("Новина [$news->title] була успішно додана!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news) {
        //$pag = News::simplePaginate(10);

        return view('admin.news.edit', [
            'news' => $news
        ]
        //, compact('pag')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->title = $request->title;
        $news->img = $request->img;
        $news->text = $request->text;

        $news->save();

        return redirect()->back()->withSuccess("Новина [$news->title] була успішно оновлена!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $tmp_title = $news->text;
        $news->delete();

        return redirect()->back()->withSuccess("Новина [$tmp_title] була успішно видалена!");
    }
}