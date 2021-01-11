<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registeredusercontroller extends Controller
{
    //
    function getusers()
    {
     $registeredusers = User::get();
     return view('registeredusers', ['registeredusers'=>$registeredusers]);
    }
 
    function userrole(Request $req){
        $registeredusers = User::where('id',$req->user_id)->first();
        $registeredusers->assignRole($req->role);
 
        return redirect()->back() ->with('status', 'Data Added Successfully!!');
 
    }
}
