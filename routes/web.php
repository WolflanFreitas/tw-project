<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaudacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ServicoController;
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
Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/sobre',[SiteController::class,'sobre']);
Route::get('/contato',[SiteController::class,'contato'])->name('contato');
Route::get('/servicos',[ServicoController::class,'index'])->name('servicos.index');
Route::get('/servicos/{id}',[ServicoController::class,'show'])->name('servicos.show');
//Single Action Controller
Route::get('/saudacao/{nome?}',SaudacaoController::class);

Route::get('/clientes',[ClientController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClientController::class,'create'])->name('clientes.create');
Route::get('/clientes/{id}',[ClientController::class,'show'])->name('cliente.show');
