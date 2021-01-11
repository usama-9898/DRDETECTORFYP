<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\founditem;

class reportfounditemcontroller extends Controller
{
    //
    function save (Request $req){
        $founditem = new founditem();
        $founditem->itemfound= $req->itemfound;
        $founditem->itemcolor= $req->itemcolor;
        $founditem->nameondocuments= $req->Docname;
        $founditem->inst_on_doc= $req->Docinstitution; 
        $founditem->cnic= $req->cnic;  
        $founditem->reg_on= $req->Regnumber; 
        $founditem->addressondoc= $req->Docaddress; 
        $founditem->placefound= $req->placefound; 
        $founditem->contactno= $req->contactnumber; 
        $founditem->item_desc= $req->info;
        $founditem->save(); 
        
        return redirect()->back() ->with('status', 'Data Added Successfully!!');
    }
}
