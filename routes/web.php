<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\UserController;
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




Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['auth'])->group( function (){

    Route::prefix('backend')->group( function (){
        Route::get('/', [BackendController::class, 'index'])->name('backend');
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [BackendController::class, 'create'])->name('user.create');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        // content utama //
        Route::get('/contentutama', [BackendController::class, 'contentutama'])->name('backend.contentutama');
        Route::get('/getcontentutama', [BackendController::class, 'getcontentutama'])->name('backend.getcontentutama');
        Route::post('/edit-content', [BackendController::class, 'editcontentutama'])->name('backend.editcontentutama');
        Route::post('/delete-content', [BackendController::class, 'deletecontentutama'])->name('backend.deletecontentutama');
        Route::post('/store-content', [BackendController::class, 'storecontentutama'])->name('backend.storecontentutama');
        
        
    });
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
