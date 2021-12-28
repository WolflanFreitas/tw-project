@extends('layout.main')

@section('title','Serviços')

@section('content')

    <div class="row">
        <h1>Serviços</h1>

        <table class="table" style="text-align: center">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{$servico['nome']}}</td>
                        <td>{{$servico['descricao']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
