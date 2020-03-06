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
            'emp_phone' => 'required',
            'emp_category' => 'required',
            'emp_type' => 'required',
            'emp_email' => 'required|email',
            'password' => 'required'
        ]);
        
        $associate = Associate::create(request(['emp_name', 'emp_phone', 'emp_category', 'emp_type', 'associate_state', 'associate_city',   'email', 'password']));
        
        auth()->login($associate);
        Auth::guard('associate')->logout();
        return redirect()->to(route('associate.dashboard'));
    }
}

