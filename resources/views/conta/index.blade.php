<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <a href="{{ route('conta.create') }}">Cadastrar</a><br>

    <h1>Listar Contas</h1>

    {{-- <a href="{{ route('conta.show') }}">Visualizar</a><br>
    <a href="{{ route('conta.edit') }}">Editar</a><br>
    <a href="{{ route('conta.destroy') }}">Apagar</a><br><br> --}}

    @forelse ($contas as $conta)
        ID: {{ $conta->id }}<br>
        Nome: {{ $conta->nome }}<br>
        Valor: {{ 'R$' . number_format($conta->valor, 2, ',', '.') }}<br>
        Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->format('d/m/Y') }}<br><br>
        <a href="{{ route('conta.show', ['conta' => $conta->id]) }}">Visualizar</a><br>
        <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}">Editar</a><br>
        <hr>
    @empty
        <span style="color: #ff0000;">Nenhuma conta cadastrada!</span>
    @endforelse

</body>

</html>
