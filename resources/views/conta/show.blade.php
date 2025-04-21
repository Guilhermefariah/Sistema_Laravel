<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <a href="{{ route('conta.index') }}">Listar</a><br>

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

</body>

</html>
