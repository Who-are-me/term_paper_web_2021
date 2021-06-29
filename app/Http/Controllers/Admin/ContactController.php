<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pag = Contact::simplePaginate(10);

        return view('admin.contact.index', compact('pag'));
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
        $contact = New Contact();
        $contact->pip = $request->pip;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->theme = $request->theme;
        $contact->text = $request->text;

        $contact->save();

        return redirect()->back()->withSuccess("Запитання було успішно додано!");
        
        // secret key
        

        // require_once (dirname(__FILE__).'/autoload.php');

        // if (isset($_POST['g-recaptcha-response'])) {

        //     $recaptcha = new \ReCaptcha\ReCaptcha($secret);

        //     $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        //     if ($resp->isSuccess()) {
        //         $contact = New Contact();
        //         $contact->pip = $request->pip;
        //         $contact->phone = $request->phone;
        //         $contact->email = $request->email;
        //         $contact->theme = $request->theme;
        //         $contact->text = $request->text;

        //         $contact->save();

        //         return redirect()->back()->withSuccess("Запитання було успішно додано!");
        //     }
        //     else {
        //         return redirect()->back()->withSuccess("Запитання НЕ було додано! Пройдіть капчу будь ласка!");
        //     }
        // }

        // $capcha;

        // if(isset($_POST['token'])) {
        //     $capcha = $_POST['token'];
        // }

        // $secret = '6LdpR2QbAAAAAFxGtur3qapmdk8_t0MA1IxeT22w';
        // $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $capcha;
        // $response = file_get_contents($url);
        // $responseKeys = json_decode($response, true);
        // header('Content-type: application/json');

        // if($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
        //     $contact = New Contact();
        //     $contact->pip = $request->pip;
        //     $contact->phone = $request->phone;
        //     $contact->email = $request->email;
        //     $contact->theme = $request->theme;
        //     $contact->text = $request->text;

        //     $contact->save();

        //     return redirect()->back()->withSuccess("Запитання було успішно додано!");
        // } 
        // else {
        //     return redirect()->back()->withSuccess("Запитання НЕ було додано! Пройдіть капчу будь ласка!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
