@extends('layouts.app')

@section('title')
    - Categorías
@endsection

@section('main-content')
    <section>
        <hgroup>
            <h2>Categorías</h2>
            <p>Organiza tus categorías de productos</p>
        </hgroup>
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
    </section>
@endsection
