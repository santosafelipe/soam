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
        ]);

        // Cria um novo plano
        Plano::create($request->all());

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
     * Exibe o formulário para edição de um plano.
     */
    public function edit($id)
    {
        $plano = Plano::findOrFail($id);
        return view('planos.edit', compact('plano'));
    }

    /**
     * Atualiza os dados de um plano.
     */
    public function update(Request $request, $id)
    {
        $plano = Plano::findOrFail($id);

        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
        ]);

        // Atualiza os dados do plano
        $plano->update($request->all());

        return redirect()->route('planos.index')->with('success', 'Plano atualizado com sucesso!');
    }

    /**
     * Remove um plano do banco de dados.
     */
    public function destroy($id)
    {
        $plano = Plano::findOrFail($id);
        $plano->delete();

        return redirect()->route('planos.index')->with('success', 'Plano removido com sucesso!');
    }
}
