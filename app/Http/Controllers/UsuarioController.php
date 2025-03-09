<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Importa o Model Usuario
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Exibe a lista de usuários cadastrados.
     */
    public function index()
    {
        $usuarios = Usuario::all(); // Busca todos os usuários no banco de dados
        return view('usuarios.index', compact('usuarios')); // Retorna a view com os dados
    }

    /**
     * Exibe o formulário de criação de um novo usuário.
     */
    public function create()
    {
        return view('usuarios.create'); // Retorna a view do formulário de criação
    }

    /**
     * Armazena um novo usuário no banco de dados.
     */
    public function store(Request $request)
    {
        // Valida os dados enviados pelo formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
            'telefone' => 'nullable|string|max:255',
            'cpf' => 'required|string|unique:usuarios,cpf|max:255',
            'cep' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'data_nascimento' => 'nullable|date',
            'tipo' => 'required|in:admin,gestor,instrutor,aluno',
        ]);

    
        // Criação do usuário no banco de dados
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha), // Criptografa a senha antes de salvar
            'telefone' => $request->telefone,
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'data_nascimento' => $request->data_nascimento,
            'tipo' => $request->tipo,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Exibe os detalhes de um usuário específico.
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id); // Busca o usuário pelo ID
        return view('usuarios.show', compact('usuario')); // Retorna a view com os detalhes
    }

    /**
     * Exibe o formulário para editar um usuário.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Atualiza os dados de um usuário específico.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        // Valida os dados antes de atualizar
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,'.$usuario->id,
            'cpf' => 'required|unique:usuarios,cpf,'.$usuario->id,
            'telefone' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'cep' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
        ]);

        // Atualiza os dados do usuário
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove um usuário do banco de dados.
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário removido com sucesso!');
    }
}
