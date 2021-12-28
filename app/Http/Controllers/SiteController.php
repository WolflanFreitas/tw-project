<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Exibe a página home da aplicação
     *
     * @return String
     */
    public function index()
    {
        return "Página HOME";
    }

    /**
     * Exibe a página sobre com pequeno exemplo de conteúdo dinâmico
     *
     * @return String
     */
    public function sobre()
    {
        $multiplicacao = 5 * 5;
        return "Página SOBRE, número dinâmico: $multiplicacao";
    }

    /**
     * Exibe a página contato
     *
     * @return String
     */
    public function contato()
    {
        return "Página CONTATO";
    }

    /**
     * Exibe a página serviços
     *
     * @return String
     */
    public function servicos()
    {
        return "Página SERVIÇOS";
    }

    /**
     * Exibe a página serviço com a passagem de parâmetro através da url
     *
     * @return String
     */
    public function servico(int $id)
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
        return $servicos[$id]['nome'];
    }

}
