<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos/{id}',[ProdutoController::class, 'show']);
Route::get('produtos',[ProdutoController::class, 'index']);




