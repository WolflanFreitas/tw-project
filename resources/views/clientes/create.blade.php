@extends('layout.main')

@section('title', 'Serviços')

@section('content')

    <div class="row">

        <h1>Cadastrar novo cliente</h1>

        <form action="{{route('clientes.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Endereço</label>
                <input id="endereco" name="endereco" type="text" class="form-control" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Observação</label>
                <textarea id="observacao" name="observacao" cols="30" rows="10" class="form-control" placeholder="Digite a observação" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>

@endsection
