<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cygnus Shop') }}@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" />


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <a class="navbar-brand navbar-brand-autodark me-3" href="#">Cygnus Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Producto
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a></li>
                                <li><a class="dropdown-item" href="{{ route('products.index') }}">Productos</a></li>
                                <li><a class="dropdown-item" href="{{ route('brands.index') }}">Marcas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Compras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cotizaciones</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cliente
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cliente</a></li>
                                <li><a class="dropdown-item" href="{{ route('addresses.index') }}">Direcciones</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proveedores</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Usuario
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-xl">
        @yield('main-content')
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler.min.js"></script>

</html>
