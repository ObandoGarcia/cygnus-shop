@extends('layouts.admin')

@section('title')
    - Productos
@endsection

@section('main-content')
    <section class="mt-3">
        <h2>Crear Producto</h2>
        <p>Crea nuevos productos en el sistema</p>
    </section>

    <section>
        <form action="{{ route('admin.products.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="code" class="form-label">Código</label>
                <input type="text" name="code" id="code" class="form-control" value="{{ old('code') }}"
                    required>
                @error('code')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="purchase_price" class="form-label">Precio de compra</label>
                <input type="number" name="purchase_price" id="purchase_price" class="form-control"
                    value="{{ old('purchase_price') }}" required>
                @error('purchase_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_price" class="form-label">Precio de venta</label>
                <input type="number" name="sale_price" id="sale_price" class="form-control" value="{{ old('sale_price') }}"
                    required>
                @error('sale_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}"
                    required>
                @error('stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="available_stock" class="form-label">Stock disponible</label>
                <input type="number" name="available_stock" id="available_stock" class="form-control"
                    value="{{ old('available_stock') }}" required>
                @error('available_stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Categoría</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="brand_id" class="form-label">Marca</label>
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <option value="">Selecciona una marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}</option>
                    @endforeach
                </select>
                @error('brand_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>

                <select name="status" id="status" class="form-select" required>
                    <option value="" disabled {{ old('status') ? '' : 'selected' }}>
                        Selecciona un estado
                    </option>

                    <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>
                        Activo
                    </option>

                    <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>
                        Inactivo
                    </option>

                    <option value="out_of_stock" {{ old('status') === 'out_of_stock' ? 'selected' : '' }}>
                        Agotado
                    </option>
                </select>

                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear producto</button>
        </form>
    </section>
@endsection
