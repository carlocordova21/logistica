<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\CategoriumController;
use App\Http\Controllers\Admin\GuiumController;
use App\Http\Controllers\Admin\IngresoController;


Route::get('', function () {
   return view('admin.home');
});

Route::resource('producto', ProductoController::class);

Route::resource('categoria', CategoriumController::class);

Route::resource('guia', GuiumController::class);
Route::post('guia/{send}', [GuiumController::class, 'register'])->name('guia.register');

Route::resource('ingreso', IngresoController::class);
Route::post('ingreso', [GuiumController::class, 'filter'])->name('ingreso.filter');