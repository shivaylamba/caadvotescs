<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateLoginController extends Controller
{
    protected $redirectTo = '/associate/home';
    public function __construct()
    {
        $this->middleware('guest:associate')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login.associate_login');
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
