<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <!-- Adicione seus estilos aqui -->
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('admin.products.index') }}">Produtos</a></li>
                <li><a href="{{ route('admin.customers.index') }}">Clientes</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <!-- Adicione seus scripts aqui -->
</body>

</html>