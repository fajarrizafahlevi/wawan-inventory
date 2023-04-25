<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
    return view('layout.base');
})->middleware('auth');

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('auth')->group(function (){
    Route::get('/', ['App\Http\Controllers\AuthController', 'index'])->name('auth');
    Route::post('/login', ['App\Http\Controllers\AuthController', 'login'])->name('login');
    Route::get('/logout', ['App\Http\Controllers\AuthController', 'logout'])->name('logout');
});
