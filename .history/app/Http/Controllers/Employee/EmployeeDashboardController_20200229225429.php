<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ServiceQuotation;
use Illuminate\Support\Facades\Mail;
use Sichikawa\LaravelSendgridDriver\SendGrid;
use DB;
use Auth;
use PaytmWallet;
use App\Event;

class EmployeeDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employee');
    }
    
    public function index()
    {   
        return view('employee.index');
    }

    public function operationindex()
    {   
        return view('operational.index');
    }
   
    public function leads() 
    {
        $emp_email = Auth::user()->emp_email;
        $emp = DB::select('select * from employees where emp_email = ?',[$emp_email]);
        $leads = DB::select('select * from leads where category = ?',[$emp[0]->emp_category]);
        return view('employee.leads')->with(compact('leads'));
    }

    public function Successleads() 
    {
        $emp_email = Auth::user()->emp_email;
        $emp = DB::select('select * from employees where emp_email = ?',[$emp_email]);
        $leads = DB::select('select * from leads where category = ? AND status="Successfull"',[$emp[0]->emp_category]);
        return view('employee.successleads')->with(compact('leads'));
    }

    public function leadsPage(Request $request, $id) 
    {
        $leads = DB::select('select * from leads where id = ?',[$id]);
        return view('employee.leadpage')->with(compact('leads'));
    }

    public function updateLead(Request $request, $id) 
    {
        $status = $request->input('status');
        $feedback = $request->input('feedback');
        $updated_at = new \DateTime();
        DB::update('update leads set status = ?, feedback = ?, updated_at= ? where id = ?',[$status, $feedback, $updated_at,$id]);
        return redirect('/employee/leads')->with('status', 'Lead Updated Successfully');
   }


   public function GeneratePayment(Request $request, $id) 
    {
        $leads = DB::select('select * from leads where id = ?',[$id]);
        return view('employee.generatepayment')->with(compact('leads'));
    }


    public function GeneratePaymentLink(Request $request) 
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $category = $request->input('category');
        $service = $request->input('service');
        $city = $request->input('city');
        $amount = $request->input('amount');
        $note = $request->input('note');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('lead_name'=>$name,  'lead_email'=>$email, 'lead_phone'=>$phone,'lead_category'=>$category, 'lead_service'=>$service, 'lead_note'=>$note, 'lead_amount'=>$amount, 'lead_payment_status'=>'Pending', 'updated_at'=>$updated_at, 'created_at'=>$created_at);
        DB::table('paymentlinks')->insert($data);
        return redirect('employee/success-leads')->with('status', 'Payment Link Generated and Sent for the Lead');
   }

   public function SendQuotation() 
    {
        $ticket = DB::select('select * from leads');
        return view('employee.quotation')->with(compact('ticket'));
   }

   public function genQuotation(Request $request) 
    {
        $ticketno = $request->input('ticket');
        $quote = $request->input('quote');
        $email = DB::select('select email from leads where cust_id = ?',[$ticketno]);
        Mail::to($email)->send(new ServiceQuotation());
        return redirect('/employee/leads')->with('status', 'Quotation Sent Successfully');
   }

   //Operation

   public function opleads() 
    {
        $emp_email = Auth::user()->emp_email;
        $emp = DB::select('select * from employees where emp_email = ?',[$emp_email]);
        $leads = DB::select('select * from leads where category = ?',[$emp[0]->emp_category]);
        return view('employee.leads')->with(compact('leads'));
    }

   public function opleadsPage(Request $request, $id) 
    {
        $leads = DB::select('select * from leads where id = ?',[$id]);
        return view('operational.leadpage')->with(compact('leads'));
    }


   
    
}
