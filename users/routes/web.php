<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Dashboard','Layout.Header');
Route::view('/CreateProject','Project.CreateProject');
Route::view('/Dashboard','Layout.Header');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::middleware(['auth', 'admin'])->group(function () {
   
//});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
