<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StateNursingController;


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

Route::get('/', function () {
    return view('home');
});
Route::get('/fetch-specialties', [LandingPageController::class, 'fetchSpecialties'])->name('fetchSpecialties');


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

// Admin Routes
Route::get('/adminblog', function(){
    return view('admin.blogpost');
});
Route::post('/blogpost', [BlogController::class, 'AddBlog'])->name('addblog');
Route::post('/newposttest', [BlogController::class, 'savePost'])->name('savePost');
