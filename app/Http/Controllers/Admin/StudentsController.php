<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentsContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = StudentsContent::all();

        return view('admin.students.edit', [
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
     * @param  \App\Models\StudentsContent  $studentsContent
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsContent $studentsContent)
    {
        $content = StudentsContent::all();

        return view('pages.students', compact('content') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsContent  $studentsContent
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsContent $studentsContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsContent  $studentsContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsContent $studentsContent)
    {
        DB::table('students_contents')->where('id', 1)->update(['text' => $request->img_0]);
        DB::table('students_contents')->where('id', 2)->update(['text' => $request->img_1]);
        DB::table('students_contents')->where('id', 3)->update(['text' => $request->img_2]);
        DB::table('students_contents')->where('id', 4)->update(['text' => $request->img_3]);
        DB::table('students_contents')->where('id', 5)->update(['text' => $request->img_4]);
        DB::table('students_contents')->where('id', 6)->update(['text' => $request->img_5]);
        DB::table('students_contents')->where('id', 7)->update(['text' => $request->img_6]);
        DB::table('students_contents')->where('id', 8)->update(['text' => $request->img_7]);
        DB::table('students_contents')->where('id', 9)->update(['text' => $request->text_0]);

        return redirect()->back()->withSuccess("Сторінка [Студенту] була успішно оновлена!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsContent  $studentsContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsContent $studentsContent)
    {
        //
    }
}
 