@extends('layouts.app')

@section('title')
    - Imagenes
@endsection

@section('main-content')

    <section class="mt-3">
        <h2>Imagenes</h2>
        <p>En esta sección puedes ver todas las imagenes registradas en el sistema.</p>
    </section>

    <section>
        <a href="{{ route('image.create') }}" class="btn btn-primary">Crear nueva imagen</a>
    </section>

    <section class="mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $image->filename }}</td>
                        <td><img src="{{ $image->url }}" alt="Imagen de producto" width="100" height="100"></td>
                        <td>
                            <p>Sin acciones</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $images->links() }}
    </section>
@endsection
