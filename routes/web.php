<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('frontend::index');
});
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout')
    ->middleware('web');
