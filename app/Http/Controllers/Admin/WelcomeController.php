<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WelcomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $text = WelcomeContent::all();

        return view('admin.welcome.edit', [
            'text' => $text
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
     * @param  \App\Models\StringContent  $stringContent
     * @return \Illuminate\Http\Response
     */
    public function show(WelcomeContent $welcomeContent)
    {
        $content = WelcomeContent::all();

        return view('pages.welcome', compact('content') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StringContent  $stringContent
     * @return \Illuminate\Http\Response
     */
    public function edit(StringContent $stringContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StringContent  $stringContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WelcomeContent $welcomeContent)
    {
        DB::table('welcome_contents')->where('id', 1)->update(['text' => $request->img_0]);
        DB::table('welcome_contents')->where('id', 2)->update(['text' => $request->img_1]);
        DB::table('welcome_contents')->where('id', 3)->update(['text' => $request->img_2]);

        DB::table('welcome_contents')->where('id', 4)->update(['text' => $request->text_0]);
        DB::table('welcome_contents')->where('id', 5)->update(['text' => $request->text_1]);

        DB::table('welcome_contents')->where('id', 6)->update(['text' => $request->img_3]);
        DB::table('welcome_contents')->where('id', 7)->update(['text' => $request->img_4]);

        DB::table('welcome_contents')->where('id', 8)->update(['text' => $request->img_5]);
        DB::table('welcome_contents')->where('id', 9)->update(['text' => $request->img_6]);
        DB::table('welcome_contents')->where('id', 10)->update(['text' => $request->img_7]);
        DB::table('welcome_contents')->where('id', 11)->update(['text' => $request->img_8]);
        DB::table('welcome_contents')->where('id', 12)->update(['text' => $request->img_9]);

        return redirect()->back()->withSuccess("Сторінка [Домашня] була успішно оновлена!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StringContent  $stringContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(StringContent $stringContent)
    {
        //
    }
}
