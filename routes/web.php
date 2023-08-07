<?php

use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerDashboard;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', [ControllerLogin::class, 'index'])->name('login');
Route::post('/login-proses', [ControllerLogin::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [ControllerDashboard::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [ControllerDashboard::class, 'index'])->name('dashboard');
    Route::get('/post', [ControllerDashboard::class, 'post'])->name('post');
});
