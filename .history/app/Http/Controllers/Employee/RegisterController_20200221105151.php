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
            'emp_email' => 'required|email',
            'emp_phone' => 'required',
            'emp_category' => 'required',
            'emp_type' => 'required',
            'password' => 'required'
        ]);
        
        Employee::create(request(['emp_name', 'emp_phone', 'emp_category', 'emp_type', 'emp_email', 'password']));
        //auth()->login($employee);
        return redirect()->to(route('admin.register.employee'))->with('status', 'Service Created Successfully');;
    }
}

