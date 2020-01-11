<?php

namespace App\Http\Controllers\Admin;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function menuContent() 
    {
        $category = DB::select('select * from servisecategories where status = active');
        $subcategory = DB::select('select * from subcategories');
        return view('site.index');
    }

    
    
}
