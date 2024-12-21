<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;




Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name

Route ::get('/admin', [AdminController::class, 'index']);

Route ::get('/pegawai', [PegawaiController::class, 'index']);

//praktikum laravel 3

Route ::get('/admin/kelurahan', [KelurahanController::class, 'index']);
Route ::get('/admin/pasien', [PasienController::class, 'index']);

