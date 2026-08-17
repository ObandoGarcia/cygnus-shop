@extends('layouts.app')

@section('title')
    - Productos
@endsection

@section('main-content')

    <section class="mt-3">
        <h2>Productos</h2>
        <p>En esta sección puedes ver todos los productos registrados en el sistema.</p>
    </section>

    <section>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Crear nuevo producto</a>
    </section>

    <section class="mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Codigo</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Stock disponible</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->purchase_price}}</td>
                        <td>{{ $product->sale_price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->available_stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->brand->name }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <p>Sin acciones</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </section>
@endsection
