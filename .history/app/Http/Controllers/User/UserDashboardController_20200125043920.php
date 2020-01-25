<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;


class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    public function index()
    {   
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('user.index')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }


    public function UserDashboard()
    {
        
    }
    

}
