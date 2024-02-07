<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('chirps', function(){
    return view('chirps');
})->middleware(['auth', 'verified'])->name('chirps');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
