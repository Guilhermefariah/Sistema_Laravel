<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="text-align: center">
        <h1>Projeto Laravel</h1>
        <a style="color: #000" href="{{ route('conta.index') }}">Listar Contas</a>
    </body>
</html>
