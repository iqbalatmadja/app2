<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginprocess',[AuthController::class,'loginprocess'])->name('login.process');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerprocess',[AuthController::class,'registerprocess'])->name('register.process');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/profile',[AuthController::class,'profile'])->name('profile');
Route::post('/profileupdate',[AuthController::class,'profileupdate'])->name('profileupdate');



