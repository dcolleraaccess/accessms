<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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

Route::get('/subcontent2', function(){
    return view('subcontent2');
});

Route::get('/fetch-specialties', [LandingPageController::class, 'fetchSpecialties'])->name('fetchSpecialties');

