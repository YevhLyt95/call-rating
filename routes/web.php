<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCallsController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('my_calls', function(){
    return view('my_calls');
})->name('my_calls');
Route::get('/my_calls', [MyCallsController::class, 'index'])->name('my_calls');
Route::get('/cards/{id}', [\App\Http\Controllers\CardController::class, 'show'])->name('cards_show');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
