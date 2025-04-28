<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <a href="{{ route('conta.index') }}">
        <button type="button">
            Listar
        </button>
    </a><br>

    <h1>Cadastrar Conta</h1>

    {{-- Verificar se existe uma mensagem de erro na sessão --}}
    @if (session('error'))
        <span style="color: #ff0000;">
            {{ session('error') }}
        </span>
    @endif

    @if ($errors->any())
        <span style="color: #ff0000;">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </span>
    @endif

    <form action="{{ route('conta.store') }}" method="POST">
        @csrf

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome da conta" required><br><br>

        <label>Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="Usar '.' separar real do centavo"
            required><br><br>

        <label>Vencimento: </label>
        <input type="date" name="vencimento" id="vencimento" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
