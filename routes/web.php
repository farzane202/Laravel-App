<?php

use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactusController;
use App\Http\Controllers\pages\CourseController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\SinglecourseController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::post('/contactus',[ContactusController::class,'store'])->name('contactus_post');
Route::get('/contactus',[ContactusController::class,'index'])->name('contactus');


Route::get('/course',[CourseController::class,'index'])->name('course');

Route::get('/single_course',[SinglecourseController::class,'index'])->name('single_course');



    Route::get('/login',function (){
        return view('auth.login');
    })->name('login');
    Route::get('/register',function (){
        return view('auth.register');
    })->name('register');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
