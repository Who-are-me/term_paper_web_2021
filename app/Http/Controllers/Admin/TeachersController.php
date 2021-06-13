<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pag = Teachers::all();

        return view('admin.teachers.index', compact('pag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->pip == '' || $request->about == '' || $request->srcimg == '') {
            return redirect()->back()->withSuccess("Викладач не був доданий, заповніть всі поля!");
        }
        else {
            $teacher = New Teachers();
            $teacher->pip = $request->pip;   
            $teacher->about = $request->about;
            $teacher->srcimg = $request->srcimg;
            $teacher->save();
            return redirect()->back()->withSuccess("Викладач [$teacher->pip] був успішно доданий!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(Teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    // public function edit(Teachers $teachers)
    public function edit($id)
    {
        $teachers = DB::table('teachers')->where('id', $id)->first();

        return view('admin.teachers.edit', [
            'teachers' => $teachers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teachers $teachers)
    {
        $teachers->pip = $request->pip;
        $teachers->about = $request->about;
        $teachers->srcimg = $request->srcimg;

        $teachers->save();

        return redirect()->back()->withSuccess("Викладач [$teachers->pip] був успішно оновлений!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teachers')->where('id', '=', $id)->delete();

        return redirect()->back()->withSuccess("Викладач був успішно вилучений із списку!");
    }
}
