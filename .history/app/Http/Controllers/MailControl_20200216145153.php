<?php

namespace App\Http\Controllers;
use App\Mail\SendgridMAil
use Illuminate\Http\Request;

class MailControl extends Controller
{
   public function sendMail() {
        Mail::to('aakashsingh1999@gmail.com')->send(new SendgridMail());
        dd('Mail Sent');
   }
}
