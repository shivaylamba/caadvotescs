<?php

namespace App\Http\Controllers\Admin;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomLoginController extends Controller
{
    public function LoginPage() 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.login')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }
    
    

    
    
}
