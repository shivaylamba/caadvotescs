<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class EmployeeReg extends Mailable
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
        $name = $request->input('emp_name');
        $email = $request->input('emp_email');
        $category = $request->input('emp_category');
        $service = $request->input('emp_type');
        $password = $request->input('emp_password');
        return $this->view('emails.employees.registration')->with(compact('category', 'service', 'name', 'email', 'password'));;
    }
}
