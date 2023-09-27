<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
>>>>>>> ced


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

<<<<<<< HEAD

Route::get('/', function () {
    return view('layouts.index');
});

// Itinéraires pour l'authentification
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
=======
Route::view('/', 'home');
Route::view('/films', 'films');
Route::view ('/users', 'users');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'register')->name('register'); // Cette route affiche le formulaire d'inscription

Route::post('/register', [RegisterController::class, 'register']);
>>>>>>> ced


