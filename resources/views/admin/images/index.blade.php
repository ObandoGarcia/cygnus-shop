@extends('layouts.admin')

@section('title')
    - Imagenes
@endsection

@section('main-content')
    <section class="mt-3">
        <h2>Imagenes del producto: <strong>{{ $product->name }}</strong></h2>
    </section>

    <section class="mt-3">
        <a href="{{ route('admin.products.images.create', $product) }}" class="btn btn-primary">Crear nueva imagen</a>
    </section>

    <section class="row row-deck mt-3 g-3">
        @foreach ($images as $image)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">

                    <div class="card-img-top">
                        <img src="{{ $image->url }}" alt="Imagen de producto" class="w-100">
                    </div>

                    <div class="card-body">
                        <h3 class="card-title">
                            {{ $image->filename }}
                        </h3>
                    </div>

                </div>
            </div>
        @endforeach
    </section>
@endsection
