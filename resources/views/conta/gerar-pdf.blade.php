@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow rounded">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4 m-0">Visualizar Conta</h1>
            <div class="d-flex gap-2">
                <a href="{{ route('conta.index') }}" class="btn btn-primary btn-sm rounded shadow-sm">Listar</a>
            </div>
        </div>

        <body style="font-size: 12px">
            <h2 style="text-align: center">Contas</h2>
            <table style="border-collapse: collapse; width: 100%;">
                <tr style="background-color: #adb5bd">
                    <th style="border: 1px solid #ccc">ID</th>
                    <th style="border: 1px solid #ccc">Nome</th>
                    <th style="border: 1px solid #ccc">Valor</th>
                    <th style="border: 1px solid #ccc">Vencimento</th>
                </tr>
            </table>
        </body>
    </div>
@endsection
