<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/sobre', fn () => view('sobre'));

Route::get('/servicos/presenca-digital', fn () => view('servicos.presenca-digital'));

Route::get('/servicos/erp-inteligente', fn () => view('servicos.erp-inteligente'));

Route::get('/servicos/automacao-fluxo', fn () => view('servicos.automacao-fluxo'));

Route::get('/contato', fn () => view('contato'));

Route::post('/leads', [LeadController::class, 'store']);
