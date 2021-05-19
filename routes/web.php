<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Livewire\NotificationSweetAlert;


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
Route::get('/detailproduk/{produk?}/{jenis?}', [HomeController::class, 'detailproduk'])->name('detailproduk');
Route::get('/kredit/{jenis?}', [HomeController::class, 'kredit'])->name('kredit');
Route::get('/getdashboard', [HomeController::class, 'getdashboard'])->name('getdashboard');
Route::get('/getSukuBunga', [HomeController::class, 'getSukuBunga'])->name('getSukuBunga');
Route::post('/storeNasabah', [HomeController::class, 'storeNasabah'])->name('storeNasabah');



Route::get('/livewire/livewire.js', function () {
    echo 'Works';
});

Auth::routes();

Route::middleware(['auth'])->group( function (){

    Route::prefix('backend')->group( function (){

        //sweetalert
        Route::get('/notification-sweetalert', NotificationSweetAlert::class);

        // user management
        Route::get('/', [BackendController::class, 'index'])->name('backend');
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [BackendController::class, 'create'])->name('user.create');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        
        // content utama 
        Route::get('/contentutama', [BackendController::class, 'contentutama'])->name('backend.contentutama');
        Route::get('/getcontentutama', [BackendController::class, 'getcontentutama'])->name('backend.getcontentutama');
        Route::post('/edit-content', [BackendController::class, 'editcontentutama'])->name('backend.editcontentutama');
        Route::post('/delete-content', [BackendController::class, 'deletecontentutama'])->name('backend.deletecontentutama');
        Route::post('/store-content', [BackendController::class, 'storecontentutama'])->name('backend.storecontentutama');
        
        // dashboard
        Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('backend.dashboard');

        // suku bunga 
        Route::get('/sukubunga', [BackendController::class, 'sukubunga'])->name('backend.sukubunga');
        Route::post('/edit-sukubunga', [BackendController::class, 'editsukubunga'])->name('backend.editsukubunga');
        Route::post('/delete-sukubunga', [BackendController::class, 'deletesukubunga'])->name('backend.deletesukubunga');
        Route::post('/store-sukubunga', [BackendController::class, 'storesukubunga'])->name('backend.storesukubunga');
       
        // download pdf nasabah baru
        Route::get('/download/pdf', [BackendController::class, 'createPDF'])->name('download.pdf');
        Route::get('/nasabahbaru', [BackendController::class, 'showNasabahBaru'])->name('backend.nasabahbaru');
        
    });
});
