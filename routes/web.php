<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductosDetalleController;

Route::get('/', [ProductosDetalleController::class, 'index'])->name('home');

