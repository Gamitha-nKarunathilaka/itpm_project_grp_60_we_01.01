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
Route::get('/user/dashboard', [usercontroller::class, 'dashboard'])->name('user.dashboard');

//multi stepper form
Route::get('/form/step1', [usercontroller::class, 'step1'])->name('form.step1');
Route::post('/form/step1', [usercontroller::class, 'postStep1'])->name('form.step1.post');

Route::get('/form/step2/{id}', [usercontroller::class, 'step2'])->name('form.step2');
Route::post('/form/step2', [usercontroller::class, 'postStep2'])->name('form.step2.post');

Route::get('/form/step3/{id}', [usercontroller::class, 'step3'])->name('form.step3');
Route::post('/form/step3', [usercontroller::class, 'postStep3'])->name('form.step3.post');

Route::get('/form/step4/{id}', [usercontroller::class, 'step4'])->name('form.step4');
Route::post('/form/step4', [usercontroller::class, 'postStep4'])->name('form.step4.post');