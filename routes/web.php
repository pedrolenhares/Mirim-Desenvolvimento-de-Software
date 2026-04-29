<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato', [ContatoController::class, 'enviarDados'])
    ->name('contato.enviar');

Route::get('/contato', function () {
    return view('contato');
});
