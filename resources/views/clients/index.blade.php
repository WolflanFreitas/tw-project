@extends('layout.main')

@section('title','Serviços')

@section('content')

    <div class="row">

        <h1>Clientes Cadastrados</h1>

        <div class="table-responsive">
            <table class="table" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ação</th>

                    </tr>
                </thead>
                <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td scope="row">{{$cliente->id}}</td>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->endereco}}</td>
                            <td>CRUD</td>

                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
