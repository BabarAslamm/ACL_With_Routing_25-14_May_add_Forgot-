<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class TestController extends Controller {
    //send email
    public function sendEmail() {
        // echo '<pre>'; print_r('test'); exit;

        Mail::to('somebody@example.org')->send(new MyEmail());
    }
}

