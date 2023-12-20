<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Notifications\OtpNotification;
use Illuminate\Support\Facades\Notification;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-otp', function () {
    // dd(generateOtp('admin@gmail.com'));
    // dd(validateOtp('admin@gmail.com', '442133'));
    // $otp = new Otp();
    // // $otp = $otp->generate('admin@gmail.com', 6, 10);
    // $otp = $otp->validate('admin@gmail.com', '0681231');
    // dd($otp);
    $otp = generateOtp('admin@gmail.com');
    Notification::route('mail', 'contact@unicode.vn')->notify(new OtpNotification($otp));
});

Route::get('/2fa', [LoginController::class, 'get2FaForm'])->name('2fa');
Route::post('/2fa', [LoginController::class, 'handle2Fa']);
