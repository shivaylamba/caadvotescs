<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Associate;

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
            'associate_category' => 'required',
            'associate_profession' => 'required',
            'associate_state' => 'required',
            'associate_city' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = Associate::create(request(['name', 'phone', 'associate_category', 'associate_profession', 'associate_state', 'associate_city',   'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/associate');
    }
}

