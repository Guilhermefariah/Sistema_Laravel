@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow rounded">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Cadastrar Conta</h1>
            <a href="{{ route('conta.index') }}" class="btn btn-primary btn-sm rounded shadow-sm">Listar</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success m-3">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger m-3">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger m-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('conta.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-12">
                    <label for="nome" class="form-label">Nome:</label>
                    <input
                        type="text"
                        name="nome"
                        id="nome"
                        class="form-control"
                        placeholder="Nome da conta"
                        value="{{ old('nome') }}"
                    >
                </div>

                <div class="col-12">
                    <label for="valor" class="form-label">Valor:</label>
                    <input
                        type="text"
                        name="valor"
                        id="valor"
                        class="form-control"
                        placeholder="Valor da conta"
                        value="{{ old('valor') }}"
                    >
                </div>

                <div class="col-12">
                    <label for="vencimento" class="form-label">Vencimento:</label>
                    <input
                        type="date"
                        name="vencimento"
                        id="vencimento"
                        class="form-control"
                        value="{{ old('vencimento') }}"
                    >
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success btn-sm rounded shadow-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
