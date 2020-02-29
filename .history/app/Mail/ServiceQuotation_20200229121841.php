<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use DB;

class ServiceQuotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $quote = $request->input('quote');
        $cust = $request->input('ticket');
        $customer = DB::select('select * from leads where cust_id = "CUST087864W81997383"');
        $email = $customer[0]->email;
        return $this->view('emails.quotations.q3')->with(compact('quote','email'));;
    }
}
