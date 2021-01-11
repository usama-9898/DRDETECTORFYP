<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lostdocument;
use App\lostmobile;

class itemlostcontroller extends Controller
{
    //
     function index(lostdocument $lostdocument,  Lostmobile $lostmobile)
    {
        $lostdocument = lostdocument::get();
        $lostmobile = Lostmobile::get();
        return view('itemslost', ['lostdocument'=>$lostdocument], ['lostmobile'=>$lostmobile]);
    }

    public static function subindex()
    {
        $lostdocument = lostdocument::orderBy('created_at','asc')->get();
        $lostmobile = Lostmobile::orderBy('created_at','asc')->get();
        return view('sublostitem', ['lostdocument'=>$lostdocument], ['lostmobile'=>$lostmobile]);
    }

}

