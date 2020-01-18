<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:associate');
    }

    public function showLoginForm()
    {
        return view('associate.associatelogin');
    }

    public function login()
    {
       //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

       //Attempt to log the user index

       //if successful, then redirect to the intented location

       //if unsuccessful, then redirect back to the login with the form data
    }
}
