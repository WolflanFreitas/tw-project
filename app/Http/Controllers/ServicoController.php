<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function index() {
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

        return view('servicos.index',['servicos' => $servicos]);
    }

    public function show(int $id)
    {
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

        //Verifica se o id do serviço existe no array $serviços
        if ($id <= count($servicos)) {
            return view('servicos.show',['servico' => $servicos[$id]]);
        }
        else {
            $servico = [
                'nome' => 'Serviço Inexistente',
                'descricao' => 'descricao muito longa...'
            ];
            return view('servicos.show',['servico' => $servico]);
        }
    }
}
