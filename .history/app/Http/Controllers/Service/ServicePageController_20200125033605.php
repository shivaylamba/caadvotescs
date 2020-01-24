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
        $faq = DB::select('select * from faqs where serviceslug = ?',[$slug]);
        $associate = DB::select('select * from associates');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.service')->with(compact('serviceContent','subcategory', 'services', 'category', 'servicescard','associate', 'faq', 'popularservices', 'footerps', 'footercategory'));
    }

    public function Associatecontent(Request $request, $servicename, $byAssociate) 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $serviceContent = DB::select('select * from services where status = "active" AND servicename = ?' , [$servicename]);
        $servicescard = DB::select('select * from hosted_services where status = "approved" and byAssociate = ? and servicename = ?', [$byAssociate, $servicename]);
        $associate = DB::select('select * from associates where email = ?', [$byAssociate]);
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.aboutserviceassociate')->with(compact('serviceContent','subcategory', 'services', 'category', 'servicescard','associate', 'popularservices', 'footerps', 'footercategory'));
    }

    public function DisplayAllServices() 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $serviceContent = DB::select('select * from services where status = "active"');
        return view('site.aboutserviceassociate')->with(compact('serviceContent','subcategory', 'services', 'category',));
    }
}
