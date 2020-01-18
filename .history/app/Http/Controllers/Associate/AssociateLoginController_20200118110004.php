<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class AssociateLoginController extends DefaultLoginController
{
    protected $redirectTo = '/associate/home';
    public function __construct()
    {
        $this->middleware('guest:associate')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.associate_login');
    }
    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('associate');
    }
    
}
