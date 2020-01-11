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
        $s = DB::select('select * from services where status = "active"');
        return view('site.index',['category'=>$category],['subcategory'=>$subcategory]);
    }

    
    
}
