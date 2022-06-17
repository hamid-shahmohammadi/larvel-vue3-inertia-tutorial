<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function(){
    Route::get('/about',[AboutController::class,'index'])->name('about.index');
    Route::get('/users',[UserController::class,'index'])->name('user.index');
    Route::get('/users/create',[UserController::class,'create'])
    // ->middleware('can:create,App\Models\User')
    ->can('create','App\Models\User')
    ->name('user.create');
    Route::post('/users',[UserController::class,'store'])->name('user.store');
});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
