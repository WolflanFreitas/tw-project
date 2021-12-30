@extends('layout.main')

@section('title','Serviços')

@section('content')

    <div class="row">

        <div class="row">
            <div class="col"><h1>Clientes Cadastrados</h1></div>
            <div class="col" style="text-align: right"><a href="{{route('clientes.create')}}" class="btn btn-primary">Cadastrar Novo</a></div>
        </div>


        <div class="table-responsive">
            <table class="table" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>

                    </tr>
                </thead>
                <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td scope="row">{{$cliente->id}}</td>
                            <td><a href="{{route('cliente.show',$cliente)}}">{{$cliente->nome}}</a></td>
                            <td>{{$cliente->endereco}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
