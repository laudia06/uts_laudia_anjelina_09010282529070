<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
Route::get('/', fn()=>redirect()->route('login'));
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('auth')->group(function(){Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');Route::resource('books',BookController::class);Route::resource('categories',CategoryController::class)->except(['show']);});
