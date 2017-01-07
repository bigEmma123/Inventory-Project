<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
class emailController extends Controller
{
    //
    public function send_mail()
    {
        $data=['name'=>'Emma'];
        Mail::send(['text'=>'myviews.mail'],$data,function($message)
        {
            $message->to('enaardayfio@gmail.com')->subject('Test mail to Laravel');
            $message->from('bigemma3@gmail.com');
            
        });
        return 'Message sent';
    }
}
