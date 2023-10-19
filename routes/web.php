<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BlogController;

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


Route::get('/job', function(){
    return view('jobboard');
});


Route::get('/subcontent', function(){
    return view('subcontent');
});

Route::get('/blog', function(){
    return view('subcontent2');
});

Route::get('/blog2', function(){
    return view('blogs');
});

Route::get('/article', [BlogController::class, 'blogpage'])->name('blogpage');

Route::get('/adminblog', function(){
    return view('admin.blogpost');
});


Route::get('/referrals', function(){
    return view('referral');
});

Route::post('/blogpost', [BlogController::class, 'AddBlog'])->name('addblog');
Route::post('/newposttest', [BlogController::class, 'savePost'])->name('savePost ');

Route::get('/fetch-specialties', [LandingPageController::class, 'fetchSpecialties'])->name('fetchSpecialties');

