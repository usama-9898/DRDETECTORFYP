<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LostMobile;

class lostmobilecontroller extends Controller
{
    function save(Request $req)
    {
        
        $lostmobile = new LostMobile();
        $lostmobile->company= $req->company;
        $lostmobile->model= $req->model;
        $lostmobile->imei= $req->imei;
        $lostmobile->placeoflost= $req->palceoflost; 
        $lostmobile->additionalinformation= $req->info;  
        $lostmobile->save(); 
        
        return redirect()->back()->with('status', 'Data Added Successfully!!');
    }
}
