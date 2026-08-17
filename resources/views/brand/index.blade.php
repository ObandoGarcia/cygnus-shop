@extends('layouts.app')

@section('title')
    - Marcas
@endsection

@section('main-content')

    <section class="mt-3">
        <h2>Marcas</h2>
        <p>En esta sección puedes ver todas las marcas registradas en el sistema.</p>
    </section>

    <section>
        <a href="{{ route('brand.create') }}" class="btn btn-primary">Crear nueva marca</a>
    </section>

    <section class="mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->status }}</td>
                        <td>
                            <p>Sin acciones</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $brands->links() }}
    </section>
@endsection
