<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar Conta
    public function index()
    {
        // Listar todas as contas do banco de dados
        $contas = Conta::orderByDesc('created_at')->get();

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
    public function store(ContaRequest $request)
    {
        // Validar os dados do formulário
        $request->validated();

        // Cadastrar no banco de dados na tabela contas os valores de todos os campos
        $conta = Conta::create($request->all());

        return redirect()->route('conta.show', ['conta' => $conta->id])->with('success', 'Conta cadastrada com sucesso!');
    }

    // Detalhes Conta
    public function show(Conta $conta)
    {
        return view('conta.show', [
            'conta' => $conta,
        ]);
    }

    // Carregar Formulário de Editar Conta
    public function edit(Conta $conta)
    {
        return view('conta.edit', [
            'conta' => $conta,
        ]);
    }

    // Editar no Banco de Dados Conta
    public function update(ContaRequest $request, Conta $conta)
    {
        // Validar os dados do formulário
        $request->validated();

        // Editar as informações do registro no banco de dados
        $conta->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'vencimento' => $request->vencimento,
        ]);

        // Redirecionar para a página de detalhes da conta editada
        return redirect()->route('conta.show', ['conta' => $conta->id])->with('success', 'Conta editada com sucesso!');

    }

    // Excluir Conta do Banco de Dados
    public function destroy()
    {
        dd('Conta excluída com sucesso!');
    }
}
