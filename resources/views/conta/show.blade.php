@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow rounded">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Visualizar Conta</h1>
            <div class="d-flex gap-2">
                <a href="{{ route('conta.index') }}" class="btn btn-primary btn-sm rounded shadow-sm">Listar</a>
                <a href="{{ route('conta.edit', $conta->id) }}" class="btn btn-warning btn-sm rounded shadow-sm">Editar</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3 fw-bold">ID</dt>
                <dd class="col-sm-9 border-bottom py-2">{{ $conta->id }}</dd>

                <dt class="col-sm-3 fw-bold">Nome</dt>
                <dd class="col-sm-9 border-bottom py-2">{{ $conta->nome }}</dd>

                <dt class="col-sm-3 fw-bold">Valor</dt>
                <dd class="col-sm-9 border-bottom py-2">{{ 'R$' . number_format($conta->valor, 2, ',', '.') }}</dd>

                <dt class="col-sm-3 fw-bold">Vencimento</dt>
                <dd class="col-sm-9 border-bottom py-2">{{ \Carbon\Carbon::parse($conta->vencimento)->format('d/m/Y') }}</dd>

                <dt class="col-sm-3 fw-bold">Cadastrado</dt>
                <dd class="col-sm-9 border-bottom py-2">{{ \Carbon\Carbon::parse($conta->created_at)->format('d/m/Y H:i:s') }}</dd>

                <dt class="col-sm-3 fw-bold">Atualizado</dt>
                <dd class="col-sm-9 py-2">{{ \Carbon\Carbon::parse($conta->updated_at)->format('d/m/Y H:i:s') }}</dd>
            </dl>
        </div>
    </div>
@endsection
