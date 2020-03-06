<?php

namespace App\Mail;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestAmazonSes extends Mailable
{
    use Queueable, SerializesModels;
    
    public $email_content;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_content)
    {
        $this->email_content = $email_content;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = array('name'=>'CAADVCS SUPPORT', 'subject'=>'Thank You for filling up the quotation' ,'body' => 'A test mail');
        Mail::send('emails.test.created', $data, function ($message) {
           $message->from('contact@develophowto.com', 'Caadvocatescs Support');
       
           $message->to('aakashsingh1999@gmail.com');
       });
    }
}