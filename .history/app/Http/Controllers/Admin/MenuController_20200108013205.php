<?php

namespace App\Http\Controllers\Admin;
use App\Models\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
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

    public function menuList() 
    {
        $menu = Menus::all()->where('title','=','startup');
        return view('admin.menu-list')->with('menu',$menu);
    }

    public function menuContent() 
    {
        $menu = Menus::all();
        return view('site.index')->with('menu',$menu);
    }
}
