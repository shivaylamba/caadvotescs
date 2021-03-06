<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class QuotationLogin extends Mailable
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
        $name = $request->input('name');
        $email = $request->input('email');
        $category = $request->input('category');
        $service = $request->input('service');
        $password = $request->input('password');
        return $this->view('emails.quotations.q1')->with(compact('category', 'service', 'name', 'email', 'password'));;
    }
}
