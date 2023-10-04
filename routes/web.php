
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/{any}', function () {
    return view('index'); // "index" est le nom de votre vue principale (layout)
})->where('any', '.*');
/*
Route::view('/', 'home');
Route::view('/films', 'films');
Route::view ('/users', 'users');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'register')->name('register'); // Cette route affiche le formulaire d'inscription

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/{any}', function () {
    return view('layout');
})->where('any', '.*');

*/



