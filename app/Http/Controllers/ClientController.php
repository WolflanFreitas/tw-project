<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function index()
    {
        $clientes = Client::all();

        //Usar para gerar id
        //$txid = md5(uniqid(rand (26,35), true));

        return view('clientes.index',['clientes' => $clientes]);
    }

    public function show(int $id)
    {
        $cliente = Client::findOrFail($id);

        return view('clientes.show',['cliente' => $cliente]);
    }

    public function create() {

        return view('clientes.create');
    }

    public function store(Request $request) {

        $cliente = Client::create($request->all());

        return redirect()->route('clientes.create')->with('clienteSalvo','Cliente Salvo com Sucesso!');
    }
}
