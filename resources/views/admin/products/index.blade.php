@extends('layouts.admin')

@section('title')
    - Productos
@endsection

@section('main-content')
    <section class="col-12 mt-3">
        <div class="card">
            <div class="card-table">
                <div class="card-header">
                    <div class="row w-full">
                        <div class="col">
                            <h2 class="card-title mb-0">Productos</h2>
                            <p class="text-secondary m-0">Lista de todos los productos registrados</p>
                        </div>
                        <div class="col-md-auto col-sm-12 mt-2 mt-md-0">
                            <div class="btn-list ms-auto d-flex flex-wrap">
                                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                                    Crear nuevo producto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
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
                                    <td>{{ $product->code }}</td>
                                    <td>$ {{ number_format($product->purchase_price, 2) }}</td>
                                    <td>$ {{ number_format($product->sale_price, 2) }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->available_stock }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->brand->name }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>
                                        <div class="btn-actions">
                                            <a href="{{ route('admin.products.create') }}" class="btn btn-action"
                                                aria-label="Edit"><!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('admin.products.images.index', $product) }}"
                                                class="btn btn-action"
                                                aria-label="Copy"><!-- Download SVG icon from http://tabler.io/icons/icon/copy -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-photo-scan">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M15 8h.01" />
                                                    <path d="M6 13l2.644 -2.644a1.21 1.21 0 0 1 1.712 0l3.644 3.644" />
                                                    <path d="M13 13l1.644 -1.644a1.21 1.21 0 0 1 1.712 0l1.644 1.644" />
                                                    <path d="M3 7v-2a2 2 0 0 1 2 -2h2" />
                                                    <path d="M3 17v2a2 2 0 0 0 2 2h2" />
                                                    <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                                    <path d="M17 21h2a2 2 0 0 0 2 -2v-2" />
                                                </svg>
                                            </a>
                                            <a href="#" class="btn btn-action"
                                                aria-label="Delete"><!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </section>
            </div>
    </section>
@endsection
