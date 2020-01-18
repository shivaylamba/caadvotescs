<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateLoginController extends Controller
{
    protected $redirectTo = '/employee/home';
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login.employee');
    }
    public function username()
    {
        return 'employee_id';
    }
    protected function guard()
    {
        return Auth::guard('employee');
    }
}
