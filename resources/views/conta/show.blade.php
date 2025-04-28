@extends('layouts.admin')

@section('content')
    <a href="{{ route('conta.index') }}">
        <button type="button">
            Listar
        </button>
    </a><br><br>
    <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}">
        <button type="button">
            Editar
        </button>
    </a><br>

    <h1>Detalhes da Conta</h1>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <span style="color: #082;">
            {{ session('success') }}
        </span>
    @endif

    ID: {{ $conta->id }}<br>
    Nome: {{ $conta->nome }}<br>
    Valor: {{ 'R$' . number_format($conta->valor, 2, ',', '.') }}<br>
    Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->format('d/m/Y') }}<br><br>
    Cadastrado: {{ \Carbon\Carbon::parse($conta->created_at)->format('d/m/Y H:i:s') }}<br>
    Atualizado: {{ \Carbon\Carbon::parse($conta->updated_at)->format('d/m/Y H:i:s') }}<br>
@endsection
