@extends('layouts.public')

@section('title')
    - Producto
@endsection

@section('public-content')
    <section class="col-12 mt-3">
        <div class="card">
            <div class="card-table">
                <div class="card-header">
                    <div class="row w-full">
                        <div class="col">
                            <div>
                                <div class="row">
                                    <div class="col col-6">
                                        <p class="display-4">{{ $product->name }}</p>
                                        <p class="text-secondary m-0"><strong>Proveedor:</strong> {{ $product->brand->name }}</p>
                                        <p class="text-secondary m-0"><strong>Categoría:</strong> {{ $product->category->name }}</p>
                                    </div>
                                    <div class="col col-6 text-end">
                                        <h3 class="text-success display-4">${{ number_format($product->sale_price, 2) }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div>
                                @foreach ($images as $image)
                                    <img src="{{ $image->url }}" alt="{{ $product->name }}" class="img-thumbnail"
                                        style="max-width: 200px; margin-right: 10px;">
                                @endforeach
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('public.index') }}" class="btn btn-primary">Volver a la lista de productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="col-12 mt-3">
        <div class="card">
            <div class="card-table">
                <div class="card-header">
                    <div class="row w-full">
                        <div class="col">
                            <div class="card-body">
                                <p class="display-6">Envios a San Salvador y alrededores el mismo dia.</p>
                                <p class="display-6">Envios a nivel nacional en 2 a 3 dias habiles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
