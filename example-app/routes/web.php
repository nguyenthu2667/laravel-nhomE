<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('home', [CustomAuthController::class, 'home'])->name('home');
Route::get('pagehome', [CustomAuthController::class, 'pagehome'])->name('pagehome');
Route::get('admin', [AdminController::class, 'getPosts'])->name('home');
Route::get('post/{post}', [AdminController::class, 'editPost'])->name('edit');
Route::put('update/{id}', [AdminController::class, 'updatePost'])->name('update');
