<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('layout.index');
});
