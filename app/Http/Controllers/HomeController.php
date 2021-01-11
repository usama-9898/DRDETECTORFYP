<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::User();
        // dd($user);
        if($user->hasRole('Police'))
        {
            return view('police');
        }
        else if($user->hasRole('End User'))
        {
            return view('index');
        }
        else if($user->hasRole('Admin'))
        {
            return redirect()->route('Registeredusers');
        }
        else{
        Auth::logout();
        return redirect()->route('login');
        }
       
    }


    public function mylogout()
    {
        Auth::logout();
        return redirect()->route('login');
        
    }
    public function myregisteracc()
    {
        
        return redirect()->route('register');
    }

    
}
