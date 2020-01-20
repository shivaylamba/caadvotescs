<?php

namespace App\Http\Controllers\Service;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicePageController extends Controller
{
    public function ServiceContent(Request $request, $slug) 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $serviceContent = DB::select('select * from services where status = "active" and slug = ?',[$slug]);
        $servicescard = DB::select('select * from hosted_services where status = "approved"');
        $associate = DB::select('select * from associates');
        return view('site.service')->with(compact('serviceContent','subcategory', 'services', 'category', 'servicescard','associate'));
    }

    public function ServiceContenttt() 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $serviceContent = DB::select('select * from services where status = "active"');
        $servicescard = DB::select('select * from hosted_services where status = "approved"');
        $associate = DB::select('select * from associates');
        return view('site.aboutservice')->with(compact('serviceContent','subcategory', 'services', 'category', 'servicescard','associate'));
    }
}
