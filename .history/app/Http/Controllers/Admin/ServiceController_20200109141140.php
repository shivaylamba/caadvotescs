<?php

namespace App\Http\Controllers\Admin;
use App\Models\Menus;
use App\Models\SubMenus;
use App\Models\Models;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function createservicecategory() 
    {
        $menuContent = ServiceCategory::all();
        return view('admin.create-menu')->with('menuContent',$menuContent);
    }
    
}
