<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class ContactMailController extends Controller
{
    public function sendContactMail(Request $request)
    {
        echo "test";exit;
        print_r($request->all());exit;
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);
        

        $mail = new contactEmail($request->all());
        return $mail;
        Mail::to('vvggodoy@gmail.com')->send($mail);
    }
}
