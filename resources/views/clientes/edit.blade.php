@extends('layout.main')

@section('title', 'Editar Cliente')

@section('content')

    <div class="row">

        <h1>Cadastrar novo cliente</h1>

        <form action="{{route('clientes.update',$cliente->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input id="nome" name="nome" type="text" class="form-control" value="{{$cliente->nome}}" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Endereço</label>
                <input id="endereco" name="endereco" type="text" class="form-control" value="{{$cliente->endereco}}" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Observação</label>
                <textarea id="observacao" name="observacao" cols="30" rows="10" class="form-control" required>{{$cliente->observacao}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Editar</button>
        </form>

    </div>

@endsection
