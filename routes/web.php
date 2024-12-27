<?php

use App\Http\Controllers\data_pks_controller;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function(){
    Route::get('/',[data_pks_controller::class, 'index'])->name('data_pks');
    Route::post('/tambah',[data_pks_controller::class, 'tambah'])->name('data_pks.tambah');
    Route::get('/edit{id}',[data_pks_controller::class, 'edit'])->name('data_pks.edit');
    Route::post('/update{id}',[data_pks_controller::class, 'update'])->name('data_pks.update');
    Route::delete('/hapus{id}',[data_pks_controller::class, 'hapus'])->name('data_pks.hapus');

    Route::get('/export-pdf', [PdfController::class, 'exportPdf'])->name('pdf');
});