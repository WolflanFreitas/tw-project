<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/',[SiteController::class,'index']);
Route::get('/sobre',[SiteController::class,'sobre']);
Route::get('/contato',[SiteController::class,'contato']);
Route::get('/servicos',[SiteController::class,'servicos']);
Route::get('/servico/{id}',[SiteController::class,'servico']);
//Exemplo de Uso de função anônima para gerenciar as requisições feitas a rota
Route::get('/saudacao/{nome?}',function (string $nome = 'TreinaWeb') {
    return "Olá $nome";
});
