<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaseContent;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = BaseContent::all();

        return view('admin.base.edit', [
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
     * @param  \App\Models\BaseContent  $baseContent
     * @return \Illuminate\Http\Response
     */
    public function show(BaseContent $baseContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaseContent  $baseContent
     * @return \Illuminate\Http\Response
     */
    public function edit(BaseContent $baseContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaseContent  $baseContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaseContent $baseContent)
    {
        DB::table('base_contents')->where('id', 1)->update(['text' => $request->img_0]);
        DB::table('base_contents')->where('id', 2)->update(['text' => $request->img_1]);
        DB::table('base_contents')->where('id', 3)->update(['text' => $request->img_2]);
        DB::table('base_contents')->where('id', 4)->update(['text' => $request->img_3]);
        DB::table('base_contents')->where('id', 5)->update(['text' => $request->img_4]);
        DB::table('base_contents')->where('id', 6)->update(['text' => $request->img_5]);
        DB::table('base_contents')->where('id', 7)->update(['text' => $request->img_6]);
        DB::table('base_contents')->where('id', 8)->update(['text' => $request->img_7]);
        DB::table('base_contents')->where('id', 9)->update(['text' => $request->img_8]);
        DB::table('base_contents')->where('id', 10)->update(['text' => $request->img_9]);
        DB::table('base_contents')->where('id', 11)->update(['text' => $request->img_10]);
        DB::table('base_contents')->where('id', 12)->update(['text' => $request->img_11]);
        DB::table('base_contents')->where('id', 13)->update(['text' => $request->img_12]);
        DB::table('base_contents')->where('id', 14)->update(['text' => $request->img_13]);
        DB::table('base_contents')->where('id', 15)->update(['text' => $request->img_14]);
        DB::table('base_contents')->where('id', 16)->update(['text' => $request->img_15]);
        DB::table('base_contents')->where('id', 17)->update(['text' => $request->img_16]);
        DB::table('base_contents')->where('id', 18)->update(['text' => $request->img_17]);

        return redirect()->back()->withSuccess("Сторінка [Матеріальна база] була успішно оновлена!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaseContent  $baseContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaseContent $baseContent)
    {
        //
    }
}
