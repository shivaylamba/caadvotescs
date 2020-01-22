<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AssociateController extends Controller
{
    public function associateRequest() 
    {
        $associates = DB::select('select * from associates WHERE accounttype != "approved"');
        return view('admin.associates.associates-requests',['associates'=>$associates]);
    }

    public function associateList() 
    {
        $associates = DB::select('select * from associates WHERE accounttype = "approved"');
        return view('admin.associates.associates-list',['associates'=>$associates]);
    }

    public function approveAssociate(Request $request, $id) 
    {
        $accounttype = 'approved';
        $updated_at = new \DateTime();
        DB::update('update associates set accounttype = ?,updated_at=? where id = ?',[$accounttype,$updated_at,$id]);
        return redirect('/admin/associates/requests')->with('status', 'Associate Account Approved Succesfully');
    }

    public function deleteAssociate(Request $request, $id) 
    {
        DB::delete('delete from associates where id = ?',[$id]);
        return redirect('/admin/associates/requests')->with('status', 'Associate Account Deleted Succesfully');
    }

    public function inviteAssociate() 
    {
        $service = DB::select('select * from services');
        $associate = DB::select('select * from associates');
        return view('admin.services.invite-associate')->with(compact('service','associate'));
    }

    public function sendinvite(Request $request) 
    {
        $associateEmail = $request->input('associateEmail');
        $servicename = $request->input('servicename');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('associateEmail'=>$associateEmail, 'servicename'=>$servicename, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('associateinvitations')->insert($data);
        return redirect('/admin/associates/invite')->with('status', 'Invitation sent succesfully to the Associate');
    }

    public function giveRating() 
    {
        $associate = DB::select('select * from associates');
        return view('admin.services.rating')->with(compact('associate'));
    }

    public function addRating(Request $request, $id) 
    {
        $associate = DB::select('select * from associates where id = ?',[$id]);
        return view('admin.services.addrating')->with(compact('associate'));
    }

    public function postRating(Request $request, $id) 
    {
        $name = $request->input('name');
        $associate_rating = $request->input('associate_rating');
        $updated_at = new \DateTime();
        DB::update('update associates set name = ?, associate_rating = ?, updated_at=? where id = ?',[$name, $associate_rating, $updated_at,$id]);
        return redirect('/admin/select/associate')->with('status', 'Associated Rated Succesfully');
    }

    public function GovFees() 
    {
        $service = DB::select('select * from services');
        return view('admin.services.gov-fees')->with(compact('service'));
    }

    public function AddGovFees(Request $request) 
    {
        $govfees = $request->input('govfees');
        $serviceslug = $request->input('serviceslug');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('govfees'=>$govfees, 'serviceslug'=>$serviceslug,'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('govfees')->insert($data);
        return redirect('/admin/gove-fees/add')->with('status', 'Gov Fees Added Successfully');
    
    }

    public function GovFeesList() 
    {
        $govfees = DB::select('select * from govfees');
        return view('admin.services.gov-fees')->with(compact('govfees'));
    }
}
