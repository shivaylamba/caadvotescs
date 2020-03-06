<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Associate;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegisterForm()
    {
        return view('site.register');
    }

    public function register()
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $associate = Associate::create(request(['name', 'phone', 'associate_category', 'associate_profession', 'associate_state', 'associate_city',   'email', 'password']));
        
        auth()->login($associate);
        
        return redirect()->to(route('associate.dashboard'));
    }
}

