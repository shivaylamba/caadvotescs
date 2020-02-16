<?php

namespace App\Http\Controllers;
use App\Mail\SendgridMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sichikawa\LaravelSendgridDriver\SendGrid;


class MailControl extends Controller
{
   public function sendMail() {
        Mail::to('aakashsingh1999@gmail.com')->send(new SendgridMail());
        dd('Mail Sent');
   }
}
