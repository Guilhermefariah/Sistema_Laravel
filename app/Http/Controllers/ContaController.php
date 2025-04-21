<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar Conta
    public function index()
    {
        // Listar todas as contas do banco de dados
        $contas = Conta::orderBy('id', 'desc')->get();

        return view('conta.index', [
            'contas' => $contas,
        ]);
    }

    // Cadastrar Nova Conta
    public function create()
    {
        return view('conta.create');
    }

    // Salvar Conta no Banco de Dados
    public function store(Request $request)
    {
        // Cadastrar no banco de dados na tabela contas os valores de todos os campos
        Conta::create($request->all());

        return redirect()->route('conta.show')->with('success', 'Conta cadastrada com sucesso!');
    }

    // Detalhes Conta
    public function show()
    {
        return view('conta.show');
    }

    // Carregar Formulário de Editar Conta
    public function edit()
    {
        return view('conta.edit');
    }

    // Editar no Banco de Dados Conta
    public function update()
    {
        dd('Conta editada com sucesso!');
    }

    // Excluir Conta do Banco de Dados
    public function destroy()
    {
        dd('Conta excluída com sucesso!');
    }
}
