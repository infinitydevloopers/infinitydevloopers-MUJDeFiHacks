<?php

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
    return view('homepage');
})->name('home');

Route::get('/sign-in', function () {
    return view('signIn');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('signUp');
})->name('sign-up');

Route::post('/register','App\Http\Controllers\User@register')->name('register-user');

Route::post('/sign-in-user','App\Http\Controllers\User@sign_in_user')->name('sign-in-user');


Route::get('/lender', function () {
    return view('lender');
})->name('lender');

Route::get('/borrower', function () {
    return view('borrower');
})->name('borrower');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');