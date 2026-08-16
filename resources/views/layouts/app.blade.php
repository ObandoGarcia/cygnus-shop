<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cygnus Shop') }}@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <header class="container">
        <nav>
            <ul>
                <li><strong>Cygnus Shop</strong></li>
            </ul>
            <ul>
                <li><a href="#" class="secondary">Productos</a></li>
                <li><a href="{{ route('addresses.index') }}" class="secondary">Direcciones</a></li>
                <li><a href="{{ route('categories.index') }}" class="secondary">Categorías</a></li>
                <li><a href="#" class="secondary">Usuarios</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        @yield('main-content')
    </main>
</body>

</html>
