<?php

use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('viajero/create',[ViajeroController::class,'create']);
Route::post('viajero/store', [ViajeroController::class,'store'])->name('viajero.store');
Route::get('viajero/listar',[ViajeroController::class,'index'])->name('viajero.index');
Route::delete('viajero/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
Route::get('viajero/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');
Route::put('viajero/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');
Route::get('viajero/{id}',[ViajeroController::class,'show'])->name('viajero.show');

Route::get('destino/create',[DestinoController::class,'create']);
Route::post('destino/store', [DestinoController::class,'store'])->name('destino.store');
Route::get('destino/listar',[DestinoController::class,'index'])->name('destino.index');
Route::delete('destino/{destino}',[DestinoController::class,'destroy'])->name('destino.destroy');
Route::get('destino/{destino}/editar',[DestinoController::class,'edit'])->name('destino.edit');
Route::put('destino/{destino}',[DestinoController::class,'update'])->name('destino.update');
Route::get('destino/{id}',[DestinoController::class,'show'])->name('destino.show');