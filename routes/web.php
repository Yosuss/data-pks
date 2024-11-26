<?php

use App\Http\Controllers\data_pks_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function(){
    Route::get('/',[data_pks_controller::class, 'index'])->name('data_pks');
    Route::post('/tambah',[data_pks_controller::class, 'tambah'])->name('tambah');
});