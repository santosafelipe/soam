@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalhes do Usuário</h1>

    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nome:</strong> {{ $usuario->nome }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>CPF:</strong> {{ $usuario->cpf }}</p>

    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
