<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista todos os clientes existentes
     *
     * @return View
     */
    public function index() : View
    {
        $clientes = Client::all();

        //Usar para gerar id bb
        //$txid = md5(uniqid(rand (26,35), true));

        return view('clientes.index',['clientes' => $clientes]);
    }

    /**
     * Exibe um cliente específico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id) : View
    {
        $cliente = Client::findOrFail($id);

        return view('clientes.show',['cliente' => $cliente]);
    }

    /**
     * Retorna o formulário para realizar o cadastro do cliente
     *
     * @return View
     */
    public function create() : View
    {

        return view('clientes.create');
    }

    /**
     * Retorna a view index de clientes com a confirmação do armazenamento da Entidade
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {

        Client::create($request->all());

        return redirect()->route('clientes.index')->with('clienteSalvo','Cliente Salvo com Sucesso!');
    }

    /**
     * Retorna formulário para editar o cliente específico
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id) : View
    {

        $cliente = Client::findOrFail($id);

        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Retorna a view index de clientes com a confirmação da alteração do cliente específico
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request) : RedirectResponse
    {

        $cliente = Client::findOrFail($id);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('clienteEditado','Cliente alterado com Sucesso!');
    }

    /**
     * Retorna a view index de clientes com a confirmação da exclusão do cliente específico
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy (int $id) : RedirectResponse
    {

        $cliente = Client::findOrFail($id);

        $cliente->delete();

        return redirect()->route('clientes.index')->with('clienteExcluido','Cliente excluído com Sucesso!');

    }

}
