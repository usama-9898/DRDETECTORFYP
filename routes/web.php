<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/home', function () {
//     return view('index');
// });



Route::get('home', 'homeController@index')->name('home')->middleware('auth');

Route::get('reportscam', function () {
    return view('reportscam');
})->name('reportscam')->middleware('auth');
    
Route::get('Lostmobile', function () {
    return view('Lostmobile');
})->name('Lostmobile')->middleware('auth');

Route::get('lostdocument', function () {
    return view('lostdocument');
})->name('lostdocument')->middleware('auth');

Route::get('ReportLostitem', function () {
    return view('ReportLostitem');
})->name('ReportLostitem')->middleware('auth');

Route::get('Mobileblocking', function () {
    return view('Mobileblocking');
})->name('Mobileblocking')->middleware('auth');

Route::get('FIR', function () {
    return view('FIR');
})->name('FIR')->middleware('auth');

Route::get('Police', function () {
    return view('Police');
})->name('Police')->middleware('auth');

Route::get('itemslost', function () {
    return view('itemslost');
})->name('itemslost')->middleware('auth');

Route::get('reportfounditem', function () {
    return view('founditem');
})->name('reportfounditem')->middleware('auth');


Route::get('Registeredusers', 'registeredusercontroller@getusers')->name('Registeredusers')->middleware('auth');

Route::get('founditem', function () {
    return view('founditem');
})->name('founditem')->middleware('auth');

Route::get('founditempost', function () {
    return view('founditempost');
})->name('founditempost')->middleware('auth');

Route::get('Profile', function () {
    return view('Profile');
})->name('Profile')->middleware('auth');


//route for saving lost mobile data
Route::view('form','Lostmobile');
Route::Post('submitlostmobile','lostmobilecontroller@save');

//route for saving scammer details
Route::view('form','reportscam');
Route::post('submitreportscam','reportscammercontroller@save');

//route for saving lostdocumentdetails
Route::view('form','lostdocument');
Route::post('submitlostdocument','lostdocumentcontroller@save');

//route for submitting blockmobile from PTA form
Route::view('form','Mobileblocking');
Route::post('blockmobile','mobileblockingcontroller@save')->name('blockmobile');

// route to take registerd usr role to registereddcontroller
Route::view('form','Registeredusers');
Route::post('registereduserrole','registeredusercontroller@userrole')->name('registereduserrole');

// route to send email to PTA
Route::post ('sendemail', 'mobileblockingcontroller@sendemail')->name('sendemail');

// route to verify user

Route::view ('reportedscam.index ', 'reportedscamcontroller@index');

Route::view ('lostdoc.index ', 'lostdocumentcontroller@index');

Route::get('itemslost','itemlostcontroller@index');
Route::get('Profile','profilecontroller@index');
Route::get('founditempost','founditempostcontroller@index');

Route::get('sublostitems ', 'itemlostcontroller@subindex');


Route::resource('reportedscam', 'reportscammercontroller');

//route to save founditem form 
Route::view('form','founditem');
Route::post('submitfounditem','reportfounditemcontroller@save');

// route to take out to login page
Route::get('mylogout','HomeController@mylogout')->name('mylogout');

// // route to take to registration page
Route::get('myregisteracc','HomeController@myregisteracc')->name('myregisteracc');

//route to update profile
Route:: view('form', 'Profile');
Route::post('updateprofile', 'profilecontroller@save');

//route to saave police information
Route:: view('form', 'Police');
Route::post('submit', 'policecontroller@save')->name('submit');



Auth::routes();



