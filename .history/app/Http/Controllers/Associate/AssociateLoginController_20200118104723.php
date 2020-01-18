<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateLoginController extends Controller
{
    protected $redirectTo = '/associate/home';
    public function __construct()
    {
        $this->middleware('guest:associates')->except('logout');
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
        return Auth::guard('associates');
    }
    protected function login()
    {
        //
    }
}
