<?php

use App\Http\Controllers\ArticoloController;
use Illuminate\Support\Facades\Route;

// Rotta messaggio di benvenuto
Route::get('/benvenuto/{id}', function ($id) {
return 'Benvenut* in Laravel '.$id.'!';
});
// definisce una rotta GET per /articoli e collega la richiesta al metodo
// index del controller ArticoloController
// Assegna un nome univoco alla rotta: articoli.index: questo permette di
// riferirsi alla rotta senza scrivere manualmente l'URL
Route::get('/articoli',
[ArticoloController::class, 'index'])->name('articoli.index');
// Rotta per visualizzare un singolo articolo
Route::get('/articolo/{id}',
[ArticoloController::class, 'show'])->name('articolo.show');
// Rotta per aggiungere un singolo articolo
Route::get('/articolo.add',
[ArticoloController::class, 'add'])->name('articolo.add');

Route::post('/articolo',
[ArticoloController::class, 'store'])->name('articolo.store');

Route::get('/articolo.elimina/{id}',
[ArticoloController::class, 'destroy'])->name('articolo.elimina');

Route::get('/articolo.edit/{id}',
[ArticoloController::class, 'edit'])->name('articolo.edit');

Route::post('/articolo.update/{id}',
[ArticoloController::class, 'update'])->name('articolo.update');