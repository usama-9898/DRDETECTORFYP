<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;

class profilecontroller extends Controller
{
    //
    function save(Request $req)
    {
        $Profile = new profile();
        $Profile->email=$req->fname;
        $Profile->contactno=$req->contactno;
        $Profile->Address=$req->address;
        $Profile->save();
        return redirect()->back() ->with('status', 'Data Added Successfully!!');

    }
    function index(profile $Profile)
    {
        $Profile = profile::get();
        return view('Profile', ['Profile'=>$Profile]);


    }
}
