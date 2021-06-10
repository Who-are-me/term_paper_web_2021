<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = AboutContent::all();

        return view('admin.about.edit', [
            'content' => $content
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function show(AboutContent $aboutContent)
    {
        $content = AboutContent::all();
        $teachers = Teachers::all();

        return view('pages.about',[
            'content' => $content,
            'teachers' => $teachers 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutContent $aboutContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutContent $aboutContent)
    {
        DB::table('about_contents')->where('id', 1)->update(['text' => $request->img_0]);
        DB::table('about_contents')->where('id', 2)->update(['text' => $request->text_0]);
        DB::table('about_contents')->where('id', 3)->update(['text' => $request->text_1]);
        DB::table('about_contents')->where('id', 4)->update(['text' => $request->img_1]);

        DB::table('about_contents')->where('id', 5)->update(['text' => $request->text_2]);
        DB::table('about_contents')->where('id', 6)->update(['text' => $request->text_3]);

        return redirect()->back()->withSuccess("Сторінка [Про нас] була успішно оновлена!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutContent  $aboutContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutContent $aboutContent)
    {
        //
    }
}
