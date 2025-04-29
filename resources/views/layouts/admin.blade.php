<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <title>Laravel</title>
    <style>
        .nav-link {
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
        }

        .nav-link:hover {
            background-color: #ffc107 !important;
            color: #000 !important;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <strong>Sistema Laravel</strong>
                </a>

                <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('conta.index') }}" class="nav-link px-3 text-white">Home</a></li>
                    <li><a href="{{ route('conta.index') }}" class="nav-link px-3 text-white">Contas</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-warning btn-sm">Login</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-4 bg-light p-3 rounded">
        @yield('content')
    </div>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
