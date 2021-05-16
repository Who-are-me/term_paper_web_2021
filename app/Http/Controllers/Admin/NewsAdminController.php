<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsAdmin;
use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $News = NewsAdmin::orderBy('created_at', 'desc')->get();

        $pag = NewsAdmin::simplePaginate(10);

        return view('admin.news.index', [
            'NewsAdmin' => $News,
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
        $NewsAdmin = New NewsAdmin();
        $NewsAdmin->title = $request->title;
        $NewsAdmin->img = $request->img;
        $NewsAdmin->text = $request->text;

        $NewsAdmin->save();

        return redirect()->back()->withSuccess("Новина [$NewsAdmin->title] була успішно додана!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsAdmin  $NewsAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(NewsAdmin $NewsAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsAdmin  $NewsAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsAdmin $NewsAdmin) {

        return view('admin.news.edit', [
            'NewsAdmin' => $NewsAdmin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsAdmin  $NewsAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsAdmin $NewsAdmin)
    {
        $NewsAdmin->title = $request->title;
        $NewsAdmin->img = $request->img;
        $NewsAdmin->text = $request->text;

        $NewsAdmin->save();

        return redirect()->back()->withSuccess("Новина [$NewsAdmin->title] була успішно оновлена!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsAdmin  $NewsAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsAdmin $NewsAdmin)
    {
        $tmp_title = $NewsAdmin->title;
        $NewsAdmin->delete();

        return redirect()->back()->withSuccess("Новина [$tmp_title] була успішно видалена!");
    }
}
