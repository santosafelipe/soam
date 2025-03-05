{{-- Página para exibir a lista de usuários cadastrados no sistema --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Usuários</h1>

    {{-- Botão para adicionar um novo usuário --}}
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Novo Usuário</a>

    {{-- Exibição de mensagens de sucesso (caso existam) --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabela para listar os usuários --}}
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop pelos usuários recebidos do controller --}}
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td>
                        {{-- Botão para editar o usuário --}}
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        {{-- Formulário para excluir o usuário --}}
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
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
