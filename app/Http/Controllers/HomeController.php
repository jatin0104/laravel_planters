<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailer;
use Mail;
use Log;

class HomeController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'title' => 'Hello World',
            'message' => 'This is a test email.'
        ];
        echo "<pre>";
        print_r(Mail::to('jatin.saxena.softrick@gmail.com')->send(new SendMailer($data)));

        return 'Email sent successfully';
    }
}
