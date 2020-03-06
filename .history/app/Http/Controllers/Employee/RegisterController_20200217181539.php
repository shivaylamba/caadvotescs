<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use DB;
use Auth;

class RegisterController extends Controller
{
    
    public function register()
    {
        $this->validate(request(), [
            'emp_name' => 'required',
            'phone' => 'required',
            'associate_category' => 'required',
            'associate_profession' => 'required',
            'associate_state' => 'required',
            'associate_city' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $associate = Associate::create(request(['name', 'phone', 'associate_category', 'associate_profession', 'associate_state', 'associate_city',   'email', 'password']));
        
        auth()->login($associate);
        Auth::guard('associate')->logout();
        return redirect()->to(route('associate.dashboard'));
    }
}

