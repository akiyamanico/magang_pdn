<?php

use App\Http\Controllers\PelajaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

    Route::get('/loginpage', [AuthController::class, 'loginpage'])->name('/loginpage');

    Route::get('register', [AuthController::class, 'daftar'])->name('register');
    Route::get('tambah', [HomeController::class, 'tambah'])->name('tambah');
    Route::get('pelajaran', [PelajaranController::class, 'index'])->name('pelajaran');
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // POST
    Route::post('register.post', [AuthController::class,'register'])->name('register.post');
    Route::post('login', [AuthController::class,'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // POST DATA
    Route::post('tambah.save', [HomeController::class,'save'])->name('save');
    Route::get('edit.data/{id}', [HomeController::class,'edit'])->name('edit');
    Route::post('update.data/{id}', [HomeController::class,'update'])->name('update');
    Route::get('delete.data/{id}', [HomeController::class,'delete'])->name('delete');

    Route::get('/token', function () {
        return csrf_token(); 
    });


    //Pelajaran
    //GET
    Route::get('tambah', [PelajaranController::class, 'index'])->name('tambah');
    Route::get('tambahmapel', [PelajaranController::class, 'tambahmapel'])->name('tambahmapel');
    Route::get('deletemapel.data/{id}', [PelajaranController::class, 'delete'])->name('deletemapel');
    Route::get('editmapel.data/{id}', [PelajaranController::class,'edit'])->name('editmapel');
    //POST
    Route::post('tambahpelajaran.save', [PelajaranController::class,'save'])->name('tambahpelajaran');
    Route::post('updatemapel.data/{id}', [PelajaranController::class,'update'])->name('updatemapel');