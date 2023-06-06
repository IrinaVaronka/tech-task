<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController as M;

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
    return view('welcome');
});

Route::prefix('messages')->name('messages-')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index');
    Route::get('/create', [M::class, 'create'])->name('create');
    Route::post('/create', [M::class, 'store'])->name('store');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
