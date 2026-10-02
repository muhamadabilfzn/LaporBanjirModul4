<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaporanController::class, 'create'])->name('laporan.create');

Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

Route::get('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
