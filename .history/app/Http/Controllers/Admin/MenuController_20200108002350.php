<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //Menus

    public function createmenu() 
    {
        $menuContent = Menus::all();
        return view('admin.create-menu')->with('menuContent',$menuContent);
    }

    public function savemenu(Request $request) 
    {

        $menuContent = new Menus;

        $menuContent->title = $request->input('title');

        $menuContent->save();
        return redirect('/create-menu')->with('status', 'Data Added');
    }
}
