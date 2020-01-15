<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociateRegistrationController extends Controller
{
    public function create()
    {
        return view('associate.create');
    }
}
