<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lostdocument;

class lostdocumentcontroller extends Controller
{
    //
    function save(Request $req)
    {
        
        $lostdocument = new lostdocument();
        $lostdocument->name= $req->Uname;
        $lostdocument->documenttype= $req->Doctype;
        $lostdocument->nameondocuments= $req->Docname;
        $lostdocument->institutionondocuments= $req->Docinstitution; 
        $lostdocument->cnic= $req->cnic;  
        $lostdocument->vehicletype= $req->Vehicletype; 
        $lostdocument->registrationno= $req->Regnumber; 
        $lostdocument->addressondoc= $req->Docaddress; 
        $lostdocument->placeoflost= $req->placeoflost; 
        $lostdocument->contactno= $req->contactnumber; 
        $lostdocument->additionalinformation= $req->info; 
        $lostdocument->save(); 
        
        return redirect()->back() ->with('status', 'Data Added Successfully!!');
    }

    public static function index(){
        $lostdocument = lostdocument::orderBy('created_at','asc')->paginate(3);
        return view('lostdoc.index')->with ('lostdocument',$lostdocument);

    }

}
