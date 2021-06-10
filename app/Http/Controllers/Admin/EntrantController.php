<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntrantContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = EntrantContent::all();

        return view('admin.entrant.edit', [
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
     * @param  \App\Models\EntrantContent  $entrantContent
     * @return \Illuminate\Http\Response
     */
    public function show(EntrantContent $entrantContent)
    {
        $content = EntrantContent::all();

        return view('pages.entrant',[
            'content' => $content
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntrantContent  $entrantContent
     * @return \Illuminate\Http\Response
     */
    public function edit(EntrantContent $entrantContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntrantContent  $entrantContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntrantContent $entrantContent)
    {
        DB::table('entrant_contents')->where('id', 1)->update(['text' => $request->img_0]);
        DB::table('entrant_contents')->where('id', 2)->update(['text' => $request->img_1]);
        DB::table('entrant_contents')->where('id', 3)->update(['text' => $request->img_2]);
        DB::table('entrant_contents')->where('id', 4)->update(['text' => $request->img_3]);
        DB::table('entrant_contents')->where('id', 5)->update(['text' => $request->img_4]);
        DB::table('entrant_contents')->where('id', 6)->update(['text' => $request->img_5]);
        DB::table('entrant_contents')->where('id', 7)->update(['text' => $request->img_6]);

        DB::table('entrant_contents')->where('id', 8)->update(['text' => $request->text_0]);

        return redirect()->back()->withSuccess("Сторінка [Абітурієнту] була успішно оновлена!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntrantContent  $entrantContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntrantContent $entrantContent)
    {
        //
    }
}
