<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\backend\BackendController;

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


// Auth::routes();

// Route::middleware(['auth'])->group( function (){

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');




// });

Auth::routes();

Route::middleware(['auth'])->group( function (){
    Route::prefix('backend')->group( function (){
        Route::get('/', [BackendController::class, 'index'])->name('backend');
        // Route::get('/create', [BackendController::class, 'create'])->name('user.create');
        // Route::get('/{id}/edit', [BackendController::class, 'edit'])->name('user.edit');
        // Route::post('/store', [BackendController::class, 'store'])->name('user.store');
    });

    Route::prefix('backend/user')->group( function (){
        Route::get('', [UserController::class, 'index'])->name('user.home');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
    });
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
