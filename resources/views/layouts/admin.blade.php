<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cygnus Shop') }}@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
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
                                <li><a class="dropdown-item" href="{{ route('admin.categories.index') }}">Categorias</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.products.index') }}">Productos</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.brands.index') }}">Marcas</a></li>
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
                                <li><a class="dropdown-item" href="{{ route('admin.addresses.index') }}">Direcciones</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proveedores</a>
                        </li>
                    </ul>
                    <div class="navbar-nav flex-row order-md-last ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="avatar avatar-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                </span>
                                <div class="d-none d-xl-block ps-2">
                                    <div>Usuario: </div>
                                    <div class="mt-1 small text-secondary">{{ Auth::user()->username }}</div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.addresses.index') }}">Perfil</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <form action="{{ route('login.destroy') }}" method="POST">
                                    <input class="btn btn-danger" type="submit" value="Cerrar sesion">
                                </form>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="page">
        <div class="page-wrapper">
            <div class="container-xl py-4">
                @yield('main-content')
            </div>
        </div>
    </main>

    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

</body>

</html>
