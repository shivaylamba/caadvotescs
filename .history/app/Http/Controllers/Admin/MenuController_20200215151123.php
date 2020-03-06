<?php

namespace App\Http\Controllers\Admin;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function menuContent() 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        foreach ($subcategory as $parent) {
            $services = DB::select('select * from services where status = "active" and subcategory=? LIMIT 6',[$parent->subcategoryname]);

        }
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 8');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.index')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }
    
    

    
    
}
