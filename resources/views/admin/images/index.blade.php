@extends('layouts.admin')

@section('title')
    - Imagenes
@endsection

@section('main-content')
    <section class="mt-3">
        <h2>Imagenes del producto: <strong>{{ $product->name }}</strong></h2>
    </section>

    <section class="mt-3">
        <a href="{{ route('products.images.create', $product) }}" class="btn btn-primary">Crear nueva imagen</a>
    </section>

    <section class="row row-deck mt-3">
        <div class="col-md-12">
            @foreach ($images as $image)
                <div class="card">
                    <div class="card-img-top">
                        <img src="{{ $image->url }}" alt="Imagen de producto">
                    </div>
                    <div class="card-body">
                        <h3>{{ $image->filename }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
