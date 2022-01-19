<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Models\City;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/hotel', [PageController::class, 'hotel']);

Route::any('/pesan', [PageController::class, 'pesan']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::any('/sum', function(){
    return view('summary', [
        'title' => 'Summary'
    ]);
});

Route::post('payment', function(){
    return 'payment';
});

Route::post('/forgot-password', [ForgotPasswordController::class, 'submitForgotPassword']);

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
});