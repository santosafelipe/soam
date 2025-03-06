<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano; // Importa o Model Plano

class PlanoController extends Controller
{
    /**
     * Exibe a lista de planos disponíveis.
     */
    public function index()
    {
        $planos = Plano::all(); // Busca todos os planos no banco de dados
        return view('planos.index', compact('planos')); // Retorna a view com os dados
    }

    /**
     * Exibe o formulário de criação de um novo plano.
     */
    public function create()
    {
        return view('planos.create');
    }

    /**
     * Armazena um novo plano no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'duracao_meses' => 'required|numeric|min:0',
        ]);

        // Cria um novo plano com os dados do formulário
        Plano::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'duracao_meses' => $request->duracao_meses,
        ]);

        // Redireciona para a listagem de planos com mensagem de sucesso
        return redirect()->route('planos.index')->with('success', 'Plano cadastrado com sucesso!');
    }

    /**
     * Exibe os detalhes de um plano específico.
     */
    public function show($id)
    {
        $plano = Plano::findOrFail($id);
        return view('planos.show', compact('plano'));
    }

   /**
     * Exibe o formulário de edição de um plano específico.
     */
    public function edit($id)
    {
        // Busca o plano pelo ID
        $plano = Plano::findOrFail($id);
        
        // Retorna a view de edição do plano
        return view('planos.edit', compact('plano'));
    }

    /**
     * Atualiza um plano existente no banco de dados.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
        ]);

        // Busca o plano pelo ID e atualiza seus dados
        $plano = Plano::findOrFail($id);
        $plano->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
        ]);

        // Redireciona para a listagem de planos com mensagem de sucesso
        return redirect()->route('planos.index')->with('success', 'Plano atualizado com sucesso!');
    }

    /**
     * Exclui um plano do banco de dados.
     */
    public function destroy($id)
    {
        // Busca o plano pelo ID e remove do banco de dados
        $plano = Plano::findOrFail($id);
        $plano->delete();

        // Redireciona para a listagem de planos com mensagem de sucesso
        return redirect()->route('planos.index')->with('success', 'Plano excluído com sucesso!');
    }
}