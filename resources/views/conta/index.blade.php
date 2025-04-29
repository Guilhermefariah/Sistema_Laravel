@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow rounded">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Listar Contas</h1>
            <a href="{{ route('conta.create') }}" class="btn btn-success btn-sm">+ Cadastrar</a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success mx-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Vencimento</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contas as $conta)
                    <tr>
                        <th scope="row">{{ $conta->id }}</th>
                        <td>{{ $conta->nome }}</td>
                        <td>{{ 'R$' . number_format($conta->valor, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($conta->vencimento)->format('d/m/Y') }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('conta.show', $conta->id) }}" class="btn btn-primary btn-sm rounded shadow-sm">Visualizar</a>
                            <a href="{{ route('conta.edit', $conta->id) }}" class="btn btn-warning btn-sm rounded shadow-sm">Editar</a>

                            <form action="{{ route('conta.destroy', $conta->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm rounded shadow-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-danger fw-semibold">Nenhuma conta cadastrada!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $contas->onEachSide(5)->links() }}
    </div>
@endsection
