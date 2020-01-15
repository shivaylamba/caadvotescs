<?php

namespace App\Http\Controllers;

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
        
        $associate = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }
}
