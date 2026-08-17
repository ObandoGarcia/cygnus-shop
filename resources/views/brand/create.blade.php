@extends('layouts.app')

@section('title')
    - Marcas
@endsection

@section('main-content')
    <section class="mt-3">
        <h2>Marcas</h2>
        <p>Crea nuevas marcas de productos</p>
    </section>

    <section>
        <form action="{{ route('brand.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="" disabled selected>Selecciona un estado</option>
                    <option value="active">Activo</option>
                    <option value="inactive">Inactivo</option>
                </select>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Marca</button>
        </form>
    </section>
@endsection
