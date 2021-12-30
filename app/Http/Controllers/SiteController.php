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
        return view('home');
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
}
