<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


       //Attempt to log the user index

       //if successful, then redirect to the intented location

       //if unsuccessful, then redirect back
    }
}
