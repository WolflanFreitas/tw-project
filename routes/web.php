<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "Conteúdo dinâmico HOME";
});

Route::get('/sobre', function () {
    return "Conteúdo dinâmico SOBRE";
});

Route::get('/contato', function () {
    return "Conteúdo dinâmico CONTATO";
});

Route::get('/servicos', function () {
    return "Conteúdo dinâmico SERVIÇO";
});

Route::get('/servico/{id}', function (int $id) {
    $servicos = [
        1 => [
            'nome' => 'Lavagem de Roupa',
            'descricao' => 'descricao muito longa...'
        ],
        2 => [
            'nome' => 'Lavagem de Coberta',
            'descricao' => 'descricao muito longa...'
        ],
        3 => [
            'nome' => 'Lavagem de Palitó',
            'descricao' => 'descricao muito longa...'
        ]
    ];
    return $servicos[$id]['nome'];
});
