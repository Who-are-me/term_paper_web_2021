<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedbackStudent;
use Illuminate\Http\Request;

class FeedbackStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pag = FeedbackStudent::simplePaginate(10);

        return view('admin.feedbackstudents.index', compact('pag')); 
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
        $feedback = New FeedbackStudent();
        $feedback->pip = $request->pip;   
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->school = $request->school;
        $feedback->option = $request->option;

        $feedback->save();

        return redirect()->back()->withSuccess("Запитання було успішно додано!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackStudent $feedbackStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackStudent $feedbackStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackStudent $feedbackStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackStudent $feedbackStudent)
    {
        //
    }
}
