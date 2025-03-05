@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Planos</h1>
    
    <!-- Exibir mensagens de sucesso -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botão para adicionar novo plano -->
    <a href="{{ route('planos.create') }}" class="btn btn-primary mb-3">Adicionar Novo Plano</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Valor (R$)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planos as $plano)
            <tr>
                <td>{{ $plano->id }}</td>
                <td>{{ $plano->nome }}</td>
                <td>R$ {{ number_format($plano->valor, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('planos.edit', $plano->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('planos.destroy', $plano->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
