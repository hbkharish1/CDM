<?php

use Illuminate\Support\Facades\Route;


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
    return view('auth.login');
});
// Auth::routes();
// Route::get('register', 'Auth\RegisterController@register');
// Route::post('register', 'Auth\RegisterController@store')->name('register');
// Route::get('login', 'Auth\LoginController@login');
// Route::post('login', 'Auth\LoginController@store')->name('login');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('home', 'Auth\LoginController@home')->name('home');
// Route::get('forget-password', 'Auth\ForgotPasswordController@getEmail');
// Route::post('forget-password', 'Auth\ForgotPasswordController@postEmail');
// Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword');
// Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword');

Route::get('/home', [App\Http\Controllers\Auth\LoginController::class, 'home'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register');

Route::get('/forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail']);
Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

Route::get('/newuser', [App\Http\Controllers\Auth\UserController::class, 'newuser'])->name('newuser');
Route::get('/allusers', [App\Http\Controllers\Auth\UserController::class, 'allusers'])->name('allusers');
Route::post('/create', [App\Http\Controllers\AdminusersController::class, 'create'])->name('create');
// Route::get('/banks/senior_financing', 'ListController@list')->name('senior_financing');

