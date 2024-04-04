<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LocalizationController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/admin.php';
  
Auth::routes();
//normal user routes
Route::group(['prefix' => '/'], function () {
Route::get('/', [IndexController::class,'index'])->name('index');
Route::post('/create', [IndexController::class, 'store']);
Route::get('/user/register',[LoginController::class,'user_register'])->name('user.register.form');
Route::post('/user/register',[GuestController::class,'user_register'])->name('user.register');  
Route::post('/create', [IndexController::class, 'store']);
Route::get('/search', [IndexController::class,'search'])->name('search');
Route::get('/user/login',[LoginController::class,'login_page']);
Route::get('/user/dashboard',[IndexController::class,'dashboard'])->name('user.dashboard');
Route::get('/watch_live', [IndexController::class,'watchLive']);
Route::get('/video', [IndexController::class,'video']);
Route::get('/videoDetail/{id}/', [IndexController::class,'videoDetail'])->name('videoDetail');
Route::get('/contact', [IndexController::class,'contact']);
Route::get('/video_detail', [IndexController::class,'liveVideo'])->name('live.video');
Route::get('/change/password',[IndexController::class,'changePasswordPage'])->name('change.passwordPage');
Route::post('/change/password',[IndexController::class,'changePassword'])->name('changeUser.password');  
Route::get('/userProfile/{id}',[IndexController::class,'userProfile'])->name('userProfile');
Route::post('/userProfile',[IndexController::class,'changeUserProfile'])->name('changeUserProfile');  

Route::get('/verify-password',[IndexController::class,'verifyPassword'])->name('verify.password');  
Route::post('/verify-code',[IndexController::class,'verifyCode'])->name('verify.code');  


});


