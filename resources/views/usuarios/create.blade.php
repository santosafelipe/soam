<!-- Formulário de Cadastro de Usuários -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cadastrar Usuário</h2>
     <!-- Exibe erros de validação -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <!-- Nome -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Senha -->
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <!-- Telefone -->
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>

        <!-- CPF -->
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>

        <!-- CEP -->
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep">
        </div>

        <!-- Endereço -->
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco">
        </div>

        <!-- Data de Nascimento -->
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
        </div>

        <!-- Tipo de Usuário -->
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Usuário</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="admin">Administrador</option>
                <option value="gestor">Gestor</option>
                <option value="instrutor">Instrutor</option>
                <option value="aluno" selected>Aluno</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
