<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisterAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.register'); 
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $registerAdmin = New User();
        $registerAdmin->name = $request->name;   
        $registerAdmin->email = $request->email;
        $registerAdmin->password = Hash::make($request->password);

        $registerAdmin->save();

        return redirect()->back()->withSuccess("Користувач [$registerAdmin->name] був успішно створений!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterAdmin  $registerAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterAdmin $registerAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterAdmin  $registerAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterAdmin $registerAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterAdmin  $registerAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterAdmin $registerAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterAdmin  $registerAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterAdmin $registerAdmin)
    {
        $tmp_title = $registerAdmin->name;
        $registerAdmin->delete();

        return redirect()->back()->withSuccess("Користувач [$tmp_title] був успішно видалений!");
    }
}
