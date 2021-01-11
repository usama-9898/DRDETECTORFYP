<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;
use App\mobile;
use Mail;


class mobileblockingcontroller extends Controller
{
    //
    function save(Request $req)
    {
        // dd($req);
        $owner = new owner();
        $owner->name= $req->Name;
        $owner->cnic= $req->cnic;
        $owner->address= $req->Address;
        $owner->contactno= $req->Contact;
        $owner->save(); 

        // for mobile blocking from PTA mobile data
        $mobile = new mobile();
        $mobile->brand= $req->Brand;
        $mobile->model= $req->Model;
        $mobile->imei= $req->Imei; 
        $mobile->owner_id= $owner->id;
        $mobile->save(); 
        
        return view('FIR');
    }

    public function sendemail(Request $request)
    {
      

        $to_name = "PTA";
        $to_email = "mrusamariaz1@gmail.com";
        $data = array('name'=>"{{ auth::user()->name }}", 'body' => "I want to block my");
        Mail::send('email.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from(env('MAIL_USERNAME'),"DR Detector");

       
});
return view('Mobileblocking') ->with('status', 'Mail sent To PTA successfully!!');
      
    }
}
