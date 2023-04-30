<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
Route::view("welcome","welcome");

Route::get('/home', function () {
   return view('welcome');
});



Route::get('/register', function () {
    return view('register');
 });


Route::post('login',[LoginController::class,'indexlogin']);
Route::view("login","login");
Route::view("newviewroute","viewnewv");