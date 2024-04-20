<?php

use App\Http\Controllers\CricketerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('cricketers/trash/{id}',[CricketerController::class, 'trash'])->name('cricketers.trash');
    Route::get('cricketers/trashed/',[CricketerController::class, 'trashed'])->name('cricketers.trashed');
    Route::get('cricketers/restore/{id}',[CricketerController::class, 'trash'])->name('cricketers.restore');
    Route::resource('cricketers', CricketerController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});