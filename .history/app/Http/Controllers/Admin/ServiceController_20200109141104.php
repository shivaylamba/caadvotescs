<?php

namespace App\Http\Controllers\Admin;
use App\Models\Menus;
use App\Models\SubMenus;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function createmenu() 
    {
        $menuContent = Menus::all();
        return view('admin.create-menu')->with('menuContent',$menuContent);
    }
    
}
