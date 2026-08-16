@extends('layouts.app')

@section('title')
    - Categorías
@endsection

@section('main-content')
    <section>
        @if (session('success'))
            <article id="alert" role="alert">
                <header>
                    <strong>Éxito</strong>
                </header>

                <p>
                    {{ session('success') }}
                </p>

                <footer>
                    <button type="button" onclick="closeAlert()">
                        Cerrar
                    </button>
                </footer>
            </article>

            <script>
                function closeAlert() {
                    document.getElementById('alert').remove();
                }
            </script>
        @endif
    </section>

    <section>
        <hgroup>
            <h2>Categorías</h2>
            <p>Organiza tus categorías de productos</p>
        </hgroup>
    </section>

    <section>
        <a href="{{ route('category.create') }}" class="secondary">Crear nueva categoría</a>
    </section>

    <section>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <p>Sin acciones</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </section>
@endsection
