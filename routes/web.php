<?php

use Illuminate\Support\Facades\Auth;
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
// USER DASHBOARD
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'user'])->name('home');

// ADMIN DASHBOARD
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin'])->name('admin');
// Auth::routes();
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');