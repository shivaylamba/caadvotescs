<?php

namespace App\Http\Controllers;
use App\Models\Menus;
use App\Models\SubMenus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $menu = Menus::all();
        //$menuitem = Menus::select('title');
        $submenu = SubMenus::all()->where('mainmenu','=','Startup');
        return view('site.index')->with('menu',$menu)->with('submenu',$submenu);
        return view('user.index');
    }
}
