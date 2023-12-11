<?php

use App\Http\Controllers\ContactMsgController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


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

Route::post('/message/submit', [ContactMsgController::class, 'sendMessage'])->name('contMsg');

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
    });
    Route::prefix('dashboard/about')->group(function () {
        Route::controller(AboutController::class)->group(function () {
            Route::get('/', 'index')->name('about');
            Route::get('/add', 'add')->name('about.add');
            Route::get('/add/submit', 'insert')->name('about.insert');
        });
    });
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
