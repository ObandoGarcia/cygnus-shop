@extends('layouts.app')

@section('title')
    - Categorías
@endsection

@section('main-content')
    <section>
        <hgroup>
            <h2>Categorías</h2>
            <p>Crea nuevas categorías de productos</p>
        </hgroup>
    </section>

    <section>
       <form action="#" method="POST">

            @csrf

            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>

            <label for="description">Descripción</label>
            <textarea name="description" id="description" required></textarea>

            <label for="status">Estado</label>
            <select name="status" id="status" required>
                <option value="active">Activo</option>
                <option value="inactive">Inactivo</option>
            </select>

            <button type="submit">Crear Categoría</button>
        </form>

       </form>
    </section>
@endsection
