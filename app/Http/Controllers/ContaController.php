<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar Conta
    public function index()
    {
        return view('conta.index');
    }

    // Cadastrar Nova Conta
    public function create()
    {
        return view('conta.create');
    }

    // Salvar Conta no Banco de Dados
    public function store()
    {
        dd('Conta cadastrada com sucesso!');
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
