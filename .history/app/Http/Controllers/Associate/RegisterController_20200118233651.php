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

    public function showRegisterForm()
    {
        return view('associate.associateregister');
    }

    public function register()
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/games');
    }
}
}
