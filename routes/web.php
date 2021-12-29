<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaudacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Models\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
    Route::get('/', function () {
        return view('welcome');
    });
*/

//Exemplo de Uso de controladores para gerenciar as requisições das rotas
Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/sobre',[SiteController::class,'sobre']);
Route::get('/contato',[SiteController::class,'contato'])->name('contato');
Route::get('/servicos',[SiteController::class,'servicos'])->name('servicos');
Route::get('/servico/{id}',[SiteController::class,'servico']);
//Single Action Controller
Route::get('/saudacao/{nome?}',SaudacaoController::class);

Route::get('/clientes',[ClientController::class,'index'])->name('clientes');
