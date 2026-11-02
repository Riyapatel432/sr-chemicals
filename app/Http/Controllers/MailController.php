<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
       $emailData = [
           'name' => $request->name,
           'email' => $request->email,
           'msg' => $request->msg,
       ];
       Mail::to('nikeshjaintms@gmail.com')->send(new WelcomeEmail($emailData));
       return redirect()->route('thank_you');
    }
}






