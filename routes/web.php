<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::view('/', 'home');
Route::view('/films', 'films');
Route::view ('/users', 'users');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'register')->name('register'); // Cette route affiche le formulaire d'inscription

Route::post('/register', [RegisterController::class, 'register']);


