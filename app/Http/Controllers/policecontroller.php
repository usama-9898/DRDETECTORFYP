<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\police;

class policecontroller extends Controller
{
    //
    function save(Request $req)
    {
      
        $Policerecord = new police();
        $Policerecord->city=$req->city;
        $Policerecord->Policestation=$req->policestation;
        $Policerecord->officername=$req->Officer_name;
        $Policerecord->petitioner_name=$req->Petitioner_name;
        $Policerecord->FIR_no=$req->Petitioner_name;
        $Policerecord->save(); 

        return redirect()->back() ->with('status', 'Data Added Successfully!!');
    }
}
