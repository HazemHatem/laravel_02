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





Route::view('/', 'site.home.index')->name('home.index');

Route::view('/doctors', 'site.doctors.index')->name('doctors.index');

// Route::get('/doctors/{id}', function (string $id) {
//     return view('site.doctors.doctor', ['id' => $id]);
// })->name('doctors.doctor');

Route::view('/doctors/booking', 'site.doctors.doctor')->name('doctors.doctor');

Route::view('/contact', 'site.contact.index')->name('contact.index');

Route::view('/majors', 'site.majors.index')->name('majors.index');

Route::view('/history', 'site.history.index')->name('history.index');

Route::view('/login', 'site.Auth.login')->name('login.index');

Route::view('/register', 'site.Auth.register')->name('register.index');
