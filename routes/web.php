<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactMsgController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


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

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/', function () {
    return view('layouts.landing');
})->name('lading');

Route::get('/dashboard', function () {
    return view('admin.home.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/message/submit', [ContactMsgController::class, 'sendMessage'])->name('contMsg');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
