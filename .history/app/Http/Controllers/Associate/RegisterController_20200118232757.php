<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:associate');
    }

    public function showLoginForm()
    {
        return view('associate.associateregister');
    }
}
