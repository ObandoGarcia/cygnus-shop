@extends('layouts.public')

@section('title')
    - Home
@endsection

@section('public-content')
    <section>
        <div class="row row-cards mt-4">
            @foreach ($products as $product)
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">

                        {{-- Imagen --}}
                        <div class="ratio ratio-1x1">
                            @if ($product->images->isNotEmpty())
                                <img src="{{ $product->images->first()->url }}" alt="{{ $product->name }}"
                                    class="card-img-top">
                            @else
                                <div class="empty">
                                    <div class="empty-img">
                                        <div class="ratio ratio-1x1 placeholder"></div>
                                    </div>

                                    <p class="empty-title">
                                        Sin imagen
                                    </p>
                                </div>
                            @endif
                        </div>

                        {{-- Información --}}
                        <div class="card-body">
                            <h3 class="card-title mb-1">
                                {{ $product->name }}
                            </h3>

                            <p class="text-secondary">
                                {{ $product->category->name }}
                            </p>

                            <p class="text-secondary mb-2">
                                {{ $product->brand->name }}
                            </p>

                            <div class="text-success fw-bold">
                                <strong class="display-6">${{ number_format($product->sale_price, 2) }}</strong>
                            </div>
                        </div>

                        {{-- Acción --}}
                        <div class="card-footer">
                            <a href="{{ route('public.products.show', $product) }}" class="btn btn-primary w-100">
                                Ver producto
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
