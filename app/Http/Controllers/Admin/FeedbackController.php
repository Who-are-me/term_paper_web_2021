<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pag = Feedback::simplePaginate(10);

        return view('admin.feedback.index', compact('pag'));
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
        // secret key
        $secret = '6LdpR2QbAAAAAFxGtur3qapmdk8_t0MA1IxeT22w';

        require_once (dirname(__FILE__).'/autoload.php');

        if (isset($_POST['g-recaptcha-response'])) {

            $recaptcha = new \ReCaptcha\ReCaptcha($secret);

            $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

            if ($resp->isSuccess()) {
                $feedback = New Feedback();
                $feedback->pip = $request->pip;
                $feedback->phone = $request->phone;
                $feedback->email = $request->email;
                $feedback->school = $request->school;
                $feedback->option = $request->option;

                $feedback->save();

                return redirect()->back()->withSuccess("Запитання було успішно додано!");
            }
            else {
                return redirect()->back()->withSuccess("Запитання НЕ було успішно додано!");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedbackStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedbackStudent)
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
    public function update(Request $request, Feedback $feedbackStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackStudent  $feedbackStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedbackStudent)
    {
        //
    }
}
