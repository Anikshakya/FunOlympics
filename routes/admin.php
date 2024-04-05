<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ContactusController;




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

Auth::routes(['register' =>false]);
Auth::routes(['verify' => true]);

// Route::get('/user/login',[LoginController::class,'login_page']);
// routes for admin and b2b
  Route::middleware(['auth','user_login'])->group(function () {     
  Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');

      Route::get('/clear-cache', function() {
        Artisan::call('optimize:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        return redirect()->back();
      });
      
      Route::get('enquiry',[HomeController::class,'enquiry'])->name('enquiry.index');
      Route::get('contact_admins',[HomeController::class,'contactAdmin'])->name('contactAdmin.index');

      Route::delete('enquiry/{id}',[HomeController::class,'deleteEnquiry']);
      Route::delete('contact_admins/{id}',[HomeController::class,'deleteContactAdmin']);


      Route::get('change/lang',[LocalizationController::class,'lang_change'])->name('changeLang');
      Route::get('/change-password',[ChangePasswordController::class, 'index'])->name('change.password');
      Route::post('/change-password', [ChangePasswordController::class, 'store'])->name('change.password');
      Route::get('/profile', [HomeController::class, 'show']);
      Route::get('/profilechange', [HomeController::class, 'changeprofile']);
      Route::put('/profile/update/{user}', [HomeController::class, 'updateprofile']);
      Route::post('/people/status/{id}', [PeopleController::class, 'status']);
      Route::resource('/contactus', ContactusController::class);
      Route::resource('/videos',VideoController::class);
      Route::post('/video/status/{id}', [VideoController::class, 'status']);
      Route::resource('users', UserController::class);
      Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contactDetail');
      Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

  });
});
  



