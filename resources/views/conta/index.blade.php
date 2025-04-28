@extends('layouts.admin')

@section('content')
    <a href="{{ route('conta.create') }}">
        <button>Cadastrar</button>
    </a><br><br>

    <h1>Listar Contas CRUD</h1>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <p style="color: #00ff00;">
            {{ session('success') }}
        </p>
    @endif

    @forelse ($contas as $conta)
        ID: {{ $conta->id }}<br>
        Nome: {{ $conta->nome }}<br>
        Valor: {{ 'R$' . number_format($conta->valor, 2, ',', '.') }}<br>
        Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->format('d/m/Y') }}<br><br>
        <a href="{{ route('conta.show', ['conta' => $conta->id]) }}">
            <button type="button">Visualizar</button>
        </a><br><br>
        <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}">
            <button type="button">Editar</button>
        </a><br><br>

        <form action="{{ route('conta.destroy', ['conta' => $conta->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
        </form>
        <hr>
    @empty
        <span style="color: #ff0000;">Nenhuma conta cadastrada!</span>
    @endforelse
@endsection
