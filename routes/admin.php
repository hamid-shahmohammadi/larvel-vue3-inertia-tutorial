<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/profile',[AboutController::class,'profile'])->name('profile.index');

require __DIR__.'/auth.php';
