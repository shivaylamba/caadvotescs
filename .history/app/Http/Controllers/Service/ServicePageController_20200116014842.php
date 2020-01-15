<?php

namespace App\Http\Controllers\Service;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicePageController extends Controller
{
    public function ServiceContent(Request $request, $id) 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $serviceContent = DB::select('select * from services where status = "active" and id = ?',[$id]);
        return view('site.service')->with(compact('serviceContent','subcategory', 'services'));
    }
}
