<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cygnus Shop') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" />
</head>

<body>
    <section class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="#" class="navbar-brand navbar-brand-autodark">Cygnus Shop</a>
            </div>
            <form class="card card-md" action="" autocomplete="off" novalidate>
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Crear una nueva cuenta</h2>
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Ingresa tu nombre de usuario">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Ingresa tu correo electronico">
                    </div>
                    <div class="mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="mb-3">
                        <label for="username">Repetir contraseña</label>
                        <input type="password" class="form-control" placeholder="Repite tu contraseña">
                    </div>
                    <div class="form-footer">
                        <button class="btn btn-primary w-100" type="submit">Crear nueva cuenta</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-secondary mt-3">
                ¿Ya estas registrado? <a href="#">Iniciar sesion</a>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler.min.js"></script>

</html>
