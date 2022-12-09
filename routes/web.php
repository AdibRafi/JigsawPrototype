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
   return view('welcome');
});

Route::get('/login', function () {
   return view('login');
});

Route::get('/register', function () {
   return view('register');
});

Route::get('/profile', function () {
   return view('profile');
});

Route::get('/session', function () {
   return view('student.sessionView');
});

Route::get('/test', function () {
   return view('test');
});

Route::get('/createTopic', function () {
   return view('lecturer.createTopic');
});

Route::get('/present', function () {
   return view('presentation.Present');
});

Route::get('/lectDashboard', function () {
   return view('lecturer.dashboard');
});

Route::get('/lectDashboard/{any}', function () {
   return view('lecturer.dashboard');
})->where('any', '.*');
