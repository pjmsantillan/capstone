<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/', [UserController::class, 'landingpage'])->name('landingpage');
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('register', [UserController::class, 'registration'])->name('register');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

// articles
Route::get('/news-articles', [HeadlineController::class, 'index'])->name('news-articles');

// userprofile
Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');


//handling data
Route::post('/handle-read-more-click', [HeadlineController::class, 'handleReadMoreClick']);

//data
Route::post('/favorite', [HeadlineController::class,'store'])->name('favorite.store');
