<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{

    //Categories

    public function createcategory() 
    {
        return view('admin.services.create-category');
    }

    public function savecategory(Request $request) 
    {
        $categoryname = $request->input('categoryname');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('categoryname'=>$categoryname,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('servisecategories')->insert($data);
        return redirect('/create-category')->with('status', 'Category Created');
    }

    public function categoryList() 
    {
        $category = DB::select('select * from servisecategories');
        return view('admin.services.category-list',['category'=>$category]);
    }

    public function deletecategory(Request $request, $id) 
    {
        DB::delete('delete from servisecategories where id = ?',[$id]);
        return redirect('/category-list')->with('status', 'Category Deleted Succesfully');
    }

    public function categoryedit(Request $request, $id) 
    {
        $category = DB::select('select * from servisecategories where id = ?',[$id]);
        return view('admin.services.category-edit',['category'=>$category]);
    }

    public function updatecategory(Request $request, $id) 
    {
        $categoryname = $request->input('categoryname');
        $status = $request->input('status');
        $updated_at = new \DateTime();
        DB::update('update servisecategories set categoryname = ?,status=?,updated_at=? where id = ?',[$categoryname,$status,$updated_at,$id]);
        return redirect('/category-list')->with('status', 'Category Updated Succesfully');
    }

    
    
    //Sub Categories

    public function createsubcategory() 
    {
        $category = DB::select('select * from servisecategories');
        return view('admin.services.create-subcategory' ,['category'=>$category]);
    }

    public function savesubcategory(Request $request) 
    {
        $subcategoryname = $request->input('subcategoryname');
        $parentcategory = $request->input('ParentCategory');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('subcategoryname'=>$subcategoryname, 'ParentCategory'=>$parentcategory,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('subcategories')->insert($data);
        return redirect('/create-subcategory')->with('status', 'Sub Category Created Successfully');
    }

    public function subcategoryList() 
    {
        $subcategory = DB::select('select * from subcategories');
        return view('admin.services.subcategory-list',['subcategory'=>$subcategory]);
    }

    public function deletesubcategory(Request $request, $id) 
    {
        DB::delete('delete from subcategories where id = ?',[$id]);
        return redirect('/subcategory-list')->with('status', 'SubCategory Deleted Succesfully');
    }

    public function subcategoryedit(Request $request, $id) 
    {
        $subcategory = DB::select('select * from subcategories where id = ?',[$id]);
        return view('admin.services.subcategory-edit',['subcategory'=>$subcategory]);
    }

    public function updatesubcategory(Request $request, $id) 
    {
        $subcategoryname = $request->input('subcategoryname');
        $status = $request->input('status');
        $updated_at = new \DateTime();
        DB::update('update subcategories set subcategoryname = ?,status=?,updated_at=? where id = ?',[$subcategoryname,$status,$updated_at,$id]);
        return redirect('/subcategory-list')->with('status', 'SubCategory Updated Succesfully');
    }


    //Services

    public function createservices() 
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        return view('admin.services.create-services')->with(compact('category', 'subcategory'));
    }

    public function saveservices(Request $request) 
    {
       
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'service'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/ServiceImages');
            $image->move($destinationPath, $name);
        }

        $servicename = $request->input('servicename');
        $subcategory = $request->input('subcategory');
        $content= $request->input('content');
        $status = $request->input('status');
        $slug = str_slug($servicename, '-');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('serviceimage'=>$name, 'servicename'=>$servicename,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at, 'subcategory'=>$subcategory, 'content'=>$content, 'slug'=>$slug);
        DB::table('services')->insert($data);
        return redirect('/create-services')->with('status', 'Service Created Successfully')->with('status', 'Service Image Uploaded Successfully to folder /ServiceImage');
    }
    
    public function servicesList() 
    {
        $services = DB::select('select * from services');
        return view('admin.services.services-list',['services'=>$services]);
    }

    public function deleteservice(Request $request, $id) 
    {
        DB::delete('delete from services where id = ?',[$id]);
        return redirect('/services-list')->with('status', 'Service Deleted Succesfully');
    }

    public function serviceedit(Request $request, $id) 
    {
        $service = DB::select('select * from services where id = ?',[$id]);
        $servicesubcategory = DB::select('select * from subcategories where status = "active"');
        return view('admin.services.service-edit')->with(compact('service','servicesubcategory'));
    }

    public function updateservices(Request $request, $id) 
    {
        $servicename = $request->input('servicename');
        $subcategory = $request->input('subcategory');
        $content= $request->input('content');
        $status = $request->input('status');
        $updated_at = new \DateTime();
        DB::update('update services set servicename = ?, subcategory=?, content=?, status=?,updated_at=? where id = ?',[$servicename, $subcategory, $content, $status,$updated_at,$id]);
        return redirect('/services-list')->with('status', 'Service Updated Succesfully');
    }
}
