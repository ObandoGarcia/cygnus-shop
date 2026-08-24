@extends('layouts.admin')

@section('title')
    - Categorías
@endsection

@section('main-content')

    <section class="mt-3">
        <h2>Categorías</h2>
        <p>En esta sección puedes ver todas las categorías registradas en el sistema.</p>
    </section>

    <section>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Crear nueva categoría</a>
    </section>

    <section class="mt-3 table-responsive">
        <table class="table table-vcenter">
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
