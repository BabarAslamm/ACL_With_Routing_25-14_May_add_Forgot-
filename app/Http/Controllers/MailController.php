<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
class MailController extends Controller
{
    public function mail()
    {
        // echo '<pre>'; print_r('heree cont'); exit;

        $data = array('name'=>"Babar Aslam");
        Mail::send('mail', $data, function($message) {
        $message->to('b@gmail.com', 'Babar Aslam')->subject('Test Mail from Selva');
        $message->from('hello@example.com','Selvakumar');
        });
        echo "Email Sent. Check your inbox";

        // $phpmailer = new PHPMailer();
        // $phpmailer->isSMTP();
        // $phpmailer->Host = 'smtp.mailtrap.io';
        // $phpmailer->SMTPAuth = true;
        // $phpmailer->Port = 2525;
        // $phpmailer->Username = '59a2ace49aeb1b';
        // $phpmailer->Password = '449bdd7dbcbda0';
    }
}
