@extends('layout.main')

@section('title', 'Cliente')

@section('content')



        <div class="card">
            <div class="card-header">
                Detalhes do Cliente: <span style="color:red; font-size: 20px;">{{$cliente->nome}}</span>
            </div>
            <div class="card-body">
                <p><strong>ID: </strong> {{$cliente->id}}</p>
                <p><strong>Endereço: </strong> {{$cliente->endereco}}</p>
                <p><strong>Observação: </strong> {{$cliente->observacao}}</p>
                <br>
                <a href="{{route('clientes.index')}}" class="btn btn-success">Voltar</a>
            </div>
        </div>



@endsection
