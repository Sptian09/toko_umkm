<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use Illuminate\Routing\Route as RoutingRoute;


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

//login
Route::get('/', [App\Http\Controllers\loginController::class, 'index'])->name('login');
Route::post('/log', [App\Http\Controllers\loginController::class, 'login'])->name('login.store')->middleware('guest');
//logout
Route::post('/logout', [App\Http\Controllers\loginController::class, 'logout'])->name('logout');
//register
Route::get('/register', [App\Http\Controllers\registerController::class, 'index'])->name('register');
Route::post('/regist', [App\Http\Controllers\registerController::class, 'store'])->name('register.store');
//dashboard
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard')->middleware('auth');
//makanan
Route::get('/menu-makanan', [App\Http\Controllers\MakananController::class, 'index'])->name('makanan.index');
Route::get('/tambah-makanan', [App\Http\Controllers\MakananController::class, 'create'])->name('makanan.tambah');
Route::post('/menu-makanan', [App\Http\Controllers\MakananController::class, 'store'])->name('makanan.store');
//minuman
Route::get('/menu-minuman', [App\Http\Controllers\minumanController::class, 'index'])->name('minuman.minuman');
Route::get('/create-minuman', [App\Http\Controllers\minumanController::class, 'create'])->name('minuman.create');
Route::post('/menu-minuman', [App\Http\Controllers\minumanController::class, 'store'])->name('minuman.store');
