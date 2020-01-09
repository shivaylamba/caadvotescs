<?php

namespace App\Http\Controllers\Admin;
use App\Models\Menus;
use App\Models\SubMenus;
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
        $menu = Menus::all();//->where('title','=','Startup');
        return view('admin.menu-list')->with('menu',$menu);
    }

    public function menuContent() 
    {
        $menu = Menus::title();
        $submenu = SubMenus::all()->where('mainmenu','=',$m->title);
        return view('site.index')->with('menu',$menu)->with('submenu',$submenu);
    }

    //submenus

    public function createsubmenu() 
    {
        $submenu = Menus::all();
        return view('admin.create-submenu')->with('submenu',$submenu);
    }

    public function savesubmenu(Request $request) 
    {

        $submenu = new SubMenus;
        //$submenu = DB::select('select * from submenus');

        $submenu->title = $request->input('title');
        $submenu->mainmenu = $request->input('mainmenu');

        $submenu->save();
        return redirect('/create-submenu')->with('status', 'SubMenu Created Succesfully');
    }
    
}
