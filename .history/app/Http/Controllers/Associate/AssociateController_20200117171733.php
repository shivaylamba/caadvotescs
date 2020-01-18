<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function AssociateRegister()
    {
        return view('auth.associate_register');
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
          'name'      => 'required|min:1',
          'associate_category'      => 'required',
          'associate_profession'      => 'required',
          'associate_state'      => 'required',
          'associate_city'      => 'required',
          'email'     => 'required',
          'password'  => 'required|min:6'
        ]);

        \App\User::create($validator);

        return redirect('/login');
     }
}
