<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postfound;

class founditempostcontroller extends Controller
{
    //
     function index(postfound $founditem)
    {
        $founditem = postfound::get();
        return view('founditempost')->with ('founditem',$founditem);
    }


}
