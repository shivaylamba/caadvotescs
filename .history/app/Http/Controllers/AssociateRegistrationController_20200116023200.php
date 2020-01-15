<?php

namespace App\Http\Controllers;

use App\Associate;
use Illuminate\Http\Request;

class AssociateRegistrationController extends Controller
{
    public function create()
    {
        return view('associate.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $associates = Associate::create(request(['name', 'email', 'password']));
        
        auth()->login($associate);
        
        return redirect()->to('/associate');
    }
}
