<?php

namespace App\Http\Controllers\Service;
use DB;
use Mail;
use App\Http\Controllers\Controller;
use App\Mail\SendgridMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sichikawa\LaravelSendgridDriver\SendGrid;

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
        $popularservices = DB::select('select * from services where status = "active" and popular="yes"');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.totalservices')->with(compact('subcategory', 'services', 'category', 'popularservices', 'footerps', 'footercategory'));
    }

    public function categoryPage(Request $request, $categoryname) 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $pcategory = DB::select('select * from servisecategories WHERE status = "active" AND categoryname=?', [$categoryname]);
        $psubcategory = DB::select('select * from subcategories where status = "active" AND ParentCategory = ?', [$categoryname]);
        $pservices = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('site.category_page')->with(compact('subcategory', 'services', 'category', 'psubcategory', 'pservices', 'pcategory', 'popularservices', 'footerps', 'footercategory'));
    }


    public function userLeads(Request $request) 
    {

        $category = $request->input('category');
        $service = $request->input('service');
        $state = $request->input('state');
        $city = $request->input('city');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('category'=>$category, 'service'=>$service, 'state'=>$state,'city'=>$city, 'name'=>$name, 'phone'=>$phone,'email'=>$email, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('leads')->insert($data);
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');

        return view('site.respond')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }
}
