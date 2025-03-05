@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Adicionar Novo Plano</h1>

    <!-- Formulário de criação de plano -->
    <form action="{{ route('planos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Plano</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor (R$)</label>
            <input type="number" name="valor" step="0.01" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar Plano</button>
        <a href="{{ route('planos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
