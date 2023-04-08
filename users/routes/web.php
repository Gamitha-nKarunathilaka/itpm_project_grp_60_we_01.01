<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Dashboard','Layout.Header');
Route::view('/CreateProject','Project.CreateProject');
Route::view('/Dashboard','Layout.Header');


// User login routes
Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);

// Admin login routes
Route::prefix('admin')->middleware(['auth:admin', 'admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // add more admin-only routes here
});

// routes/web.php

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// Registration Routes...
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
