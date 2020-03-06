<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class PaymentLink extends Mailable
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
        $phone = $request->input('phone');
        $category = $request->input('category');
        $service = $request->input('service');
        $city = $request->input('city');
        $amount = $request->input('amount');
        $note = $request->input('note');
        return $this->view('emails.payments.paymentlink')->with(compact('category', 'service', 'name', 'email',));;
    }
}
