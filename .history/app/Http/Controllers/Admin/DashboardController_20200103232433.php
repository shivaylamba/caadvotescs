<?php

namespace App\Http\Controllers\Admin;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {   
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function usertypeEdit(Request $request, $id)
    {   
        $id = User::findOrFail($id);

    }
}
