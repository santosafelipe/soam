@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Plano</h1>

    <form action="{{ route('planos.update', $plano->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Plano</label>
            <input type="text" name="nome" class="form-control" value="{{ $plano->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor (R$)</label>
            <input type="number" name="valor" step="0.01" class="form-control" value="{{ $plano->valor }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Plano</button>
        <a href="{{ route('planos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
