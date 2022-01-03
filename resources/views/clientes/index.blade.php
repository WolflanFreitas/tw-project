@extends('layout.main')

@section('title', 'Clientes')

@section('content')

    <div class="row">

        <div class="row">
            <div class="col">
                <h1>Clientes Cadastrados</h1>
            </div>
            <div class="col" style="text-align: right"><a href="{{ route('clientes.create') }}"
                    class="btn btn-primary">Cadastrar Novo <i class="bi bi-person-plus-fill"></i></a></div>
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
                            <td scope="row">{{ $cliente->id }}</td>
                            <td><a href="{{ route('clientes.show', $cliente) }}">{{ $cliente->nome }}</a></td>
                            <td>{{ $cliente->endereco }}</td>
                            <td>
                                <a href="{{ route('clientes.edit',$cliente->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('clientes.destroy',$cliente->id)}}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')"><i class="bi bi-x-square-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
