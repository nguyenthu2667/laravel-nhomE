<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('home', [CustomAuthController::class, 'home'])->name('home')->middleware('CheckLogin');
    Route::get('pagehome', [CustomAuthController::class, 'pagehome'])->name('pagehome')->middleware('CheckLogin');

Route::get('/categoryresult/{category}', [PostController::class, 'getPostsEachCategoryId'])->name('categoryresult.categoryId');
Route::get('pagehome', [PostController::class, 'getPosts']);
Route::get('post/{post}', [AdminController::class, 'editPost'])->name('edit');
Route::get('adminhome', [AdminController::class, 'getPosts'])->name('getPosts');
Route::put('update/{id}', [AdminController::class, 'updatePost'])->name('update');

//Login_out_user_admin
Route::get('admin', [AdminControllers::class, 'homeAdmin'])->name('admin')->middleware('LogCheck');
Route::get('viewcrepost', [AdminControllers::class, 'viewCreatePost'])->name('viewcrepost')->middleware('LogCheck');

//Login facebook
Route::get('/login-facebook', [AdminControllers::class, 'login_facebook'])->name('login-facebook');
Route::get('/pagehome/callback', [AdminControllers::class, 'callback_facebook']);
Route::get('/getInfo-facebook/{social}', [AdminControllers::class, 'getInFo']);
Route::get('/check-info-facebook/{social}', [AdminControllers::class, 'checkInFo']);
//Authetication roles

// Route::prefix('admin')->middleware('CheckLogin')->group(function()){}
// Route::get('pagehome', [CustomAuthController::class, 'pagehome'])->middleware('CheckLogin');
// Route::get('login', [CustomAuthController::class, 'index'])->middleware('CheckLogin');
// Route::middleware('CheckLogin')->group(function () {
//     Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
//     Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
//     Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
//     Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
//     Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
//     Route::get('home', [CustomAuthController::class, 'home'])->name('home');
//     Route::get('pagehome', [CustomAuthController::class, 'pagehome'])->name('pagehome');
// });
