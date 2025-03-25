<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Cliente\Edit;
use App\Livewire\Cliente\Index;
use Illuminate\Support\Facades\Route;

Route::get('/clientes/create', Create::class);
Route::get('/clientes/index', Index::class);
Route::get('/clientes/edit', Edit::class)->name('cliente.edit');
