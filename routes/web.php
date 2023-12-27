<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StateNursingController;
use App\Http\Controllers\CorporateController;
use App\Mail\TestEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/send-test-email', function () {
    Mail::to('mfuentes@accesshealthcarestaffing.com')->send(new TestEmail());

    return "Test email sent!";
});

Route::get('/', function () {
    return view('home');
});
Route::get('/fetch-specialties', [LandingPageController::class, 'fetchSpecialties'])->name('fetchSpecialties');

Route::get('/travel', function(){
    return view('travel');
});

Route::get('/perdiem', function(){
    return view('perdiem');
});
Route::get('/permanent', function(){
    return view('permanent');
});

Route::get('/locumtenens', function(){
    return view('locumtenens');
});

Route::get('/meetyourteam', function(){
    return view('meetyourteam');
});



Route::get('/blog', function(){
    return view('blogs');
});
Route::get('/fetchblog', [BlogController::class, 'fetchblog'])->name('fetchblog');
Route::get('/article', [BlogController::class, 'blogpage'])->name('blogpage');

Route::get('/referrals', function(){
    return view('referral');
});

Route::get('/privacypolicy', function(){
    return view('privacypolicy');
});

Route::get('/connect', function(){
    return view('connectwithus');
});

Route::get('/tjc', function(){
    return view('jointcommission');
});

Route::get('/benefits', function(){
    return view('benefits');
});

Route::get('/statenursinglicense', function(){
    return view('statenursinglicense');
});
Route::get('/stateinfo', [StateNursingController::class, 'fetchStateInfo'])->name('fetchStateInfo');

Route::get('/about', function(){
    return view('whoweare');
});

Route::get('/corporatecareers', function(){
    return view('corporatecareers');
});
Route::get('/corpjob', [CorporateController::class, 'jobpage'])->name('jobpage');



Route::get('/requeststaff', function(){
    return view('requeststaff');
});


// Admin Routes
Route::get('/adminblog', function(){
    return view('admin.blogpost');
});
Route::post('/blogpost', [BlogController::class, 'AddBlog'])->name('addblog');
Route::post('/newposttest', [BlogController::class, 'savePost'])->name('savePost');


Route::get('adminlogin', function(){
    return view('admin.adminlogin');
});
