<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        try {
            // Cadastrar no banco de dados na tabela contas os valores de todos os campos
            $conta = Conta::create([
                'nome' => $request->nome,
                'valor' => str_replace(',', '.', str_replace('.', '', $request->valor)),
                'vencimento' => $request->vencimento,
            ]);

            return redirect()->route('conta.show', ['conta' => $conta->id])->with('success', 'Conta cadastrada com sucesso!');
        } catch (Exception $e) {

            // Salvar Log de erro
            Log::warning('Erro ao cadastrar a conta', ['error' => $e->getMessage()]);

            // Redirecionar para a página de detalhes da conta com erro
            return back()->withInput()->with('error', 'Erro ao cadastrar a conta: ' . $e->getMessage());
        }
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
        try {
            // Editar as informações do registro no banco de dados
            $conta->update([
                'nome' => $request->nome,
                'valor' => str_replace(',', '.', str_replace('.', '', $request->valor)),
                'vencimento' => $request->vencimento,
            ]);

            // Salvar Log
            Log::info('Conta editada com sucesso', [
                'id' => $conta->id,
                'conta' => $conta,
            ]);

            // Redirecionar para a página de detalhes da conta editada
            return redirect()->route('conta.show', ['conta' => $conta->id])->with('success', 'Conta editada com sucesso!');
        } catch (Exception $e) {

            // Salvar Log de erro
            Log::warning('Erro ao editar a conta', ['error' => $e->getMessage()]);

            // Redirecionar para a página de detalhes da conta com erro
            return back()->withInput()->with('error', 'Erro ao editar a conta: ' . $e->getMessage());
        }
    }

    // Excluir Conta do Banco de Dados
    public function destroy(Conta $conta)
    {
        // Excluir o registro do banco de dados
        $conta->delete();

        // Redirecionar para a página de listagem de contas
        return redirect()->route('conta.index')->with('success', 'Conta excluida com sucesso!');
    }
}
