@extends('layouts.admin')

@section('title')
    - Imagenes
@endsection

@section('main-content')
    <section class="mt-3">
        <h2>Imagenes</h2>
        <h2>Agregar imagen a: {{ $product->name }}</h2>
    </section>

    <section>
        <form action="{{ route('products.images.store', $product) }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="filename" class="form-label">Nombre</label>
                <input type="text" name="filename" id="filename" class="form-control" value="{{ old('filename') }}" required>
                @error('filename')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" name="url" id="url" class="form-control" value="{{ old('url') }}" required>
                @error('url')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Imagen</button>
        </form>
    </section>
@endsection
