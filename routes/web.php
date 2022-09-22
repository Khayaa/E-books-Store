<?php

use App\Http\Livewire\Seller\Auth\Login;
use App\Http\Livewire\Seller\Auth\Logout;
use App\Http\Livewire\Seller\Auth\Register;
use App\Http\Livewire\Seller\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('seller')->name('seller.')->group(function (){
    Route::middleware('guest:seller')->group(function (){
        Route::get('/login' ,  Login::class)->name('login');
        Route::get('/register' ,  Register::class)->name('register');

    });
    Route::middleware('auth:seller')->group(function (){
        Route::get('/dashboard' , Dashboard::class)->name('dashboard');
        Route::post('/logout', Logout::class)->name('logout');
    });



});


Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
