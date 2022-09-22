<?php

use App\Http\Controllers\users\mybooks as UsersMybooks;
use App\Http\Livewire\Admin\Auth\Login as AuthLogin;
use App\Http\Livewire\Admin\Auth\Logout as AuthLogout;
use App\Http\Livewire\Admin\Auth\Register as AuthRegister;
use App\Http\Livewire\Admin\Books;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Profile as AdminProfile;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Seller\Auth\Login;
use App\Http\Livewire\Seller\Auth\Logout;
use App\Http\Livewire\Seller\Auth\Register;
use App\Http\Livewire\Seller\Dashboard;
use App\Http\Livewire\Seller\Mybooks;
use App\Http\Livewire\Seller\Profile;
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
        Route::get('/profile' , Profile::class)->name('profile');
        Route::get('/mybooks' , Mybooks::class)->name('mybooks');
        Route::post('/logout', Logout::class)->name('logout');

    });



});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware('guest:admin')->group(function(){
        Route::get('login',AuthLogin::class)->name('login');
        Route::get('register',AuthRegister::class)->name('register');
    });
    Route::middleware(['auth:admin','isAdminVerified'])->group(function(){
        Route::get('dashboard',AdminDashboard::class)->name('dashboard');
        Route::get('profile',AdminProfile::class)->name('profile');
        Route::get('books',Books::class)->name('books');
        Route::get('users',Users::class)->name('users');
        Route::post('logout',AuthLogout::class)->name('logout');
        
    });
    

});


Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('/mybooks' , [UsersMybooks::class ,'show'])->name('mybooks');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
