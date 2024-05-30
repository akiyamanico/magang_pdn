<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\PelajaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

Route::middleware('belum_login')->group(function () {
    //GET
    Route::get('loginpage', [AuthController::class, 'loginpage'])->name('loginpage');
    Route::get('register', [AuthController::class, 'daftar'])->name('register');
    //POST
    Route::post('register.post', [AuthController::class, 'register'])->name('register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
Route::middleware('sudah_login')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('edit.data/{id}', [HomeController::class, 'edit'])->name('edit');
    Route::get('delete.data/{id}', [HomeController::class, 'delete'])->name('delete');
    Route::get('tambah', [PelajaranController::class, 'index'])->name('tambah');
    Route::get('tambahmapel', [PelajaranController::class, 'tambahmapel'])->name('tambahmapel');
    Route::get('deletemapel.data/{id}', [PelajaranController::class, 'delete'])->name('deletemapel');
    Route::get('editmapel.data/{id}', [PelajaranController::class, 'edit'])->name('editmapel');
    Route::get('pelajaran', [PelajaranController::class, 'index'])->name('pelajaran');
    Route::get('tambah', [HomeController::class, 'tambah'])->name('tambah');
    //POST
    Route::post('tambahpelajaran.save', [PelajaranController::class, 'save'])->name('tambahpelajaran');
    Route::post('updatemapel.data/{id}', [PelajaranController::class, 'update'])->name('updatemapel');
    Route::post('tambah.save', [HomeController::class, 'save'])->name('save');
    Route::post('update.data/{id}', [HomeController::class, 'update'])->name('update');
    //kota
    Route::get('kota',[KotaController::class, 'index'])->name('kota');
    Route::get('tambahkota',[KotaController::class, 'create'])->name('tambahkota');
    //POST KOTA
    Route::post('createkota', [KotaController::class, 'createKota'])->name('createkota');
});
