<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reportscammer;

class reportscammercontroller extends Controller
{
    //
    function save (Request $req){
        $reportscam = new reportscammer();
        $reportscam->scamcategory=$req->scamtype;
        $reportscam->scammername=$req->Sname;
        $reportscam->cnic=$req->Scnic;
        $reportscam->contactno=$req->Scontactnumber;
        $reportscam->city=$req->city;
        $reportscam->vehicletype=$req->Vehicletype;
        $reportscam->registrationno=$req->Regnumber;
        $reportscam->propertyaddress=$req->Paddress;
        $reportscam->scammingpage=$req->Spage;
        $reportscam->scamstory=$req->info;

        $reportscam->save(); 
        
        return redirect()->back() ->with('status', 'Data Added Successfully!!');
    }

    public   static  function index(){
        $scam = reportscammer::orderBy('created_at','asc')->paginate(20);
        return view('reportedscam.index')->with ('scam',$scam);
    }

     function show($id)
    {
        $scam = reportscammer::find($id);
        return view('reportedscam.show')->with('scam', $scam);
    }
}
