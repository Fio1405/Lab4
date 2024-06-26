<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;


Route::get('/', function () {
    return view('home');
});

Route::get('home', [AuthController::class, 'page'])->name('home');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('AdminHome', [AuthController::class, 'AdminHome'])->name('AdminHome');
Route::get('pacientes', [AuthController::class, 'pacientes'])->name('pacientes');