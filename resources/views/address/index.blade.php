@extends('layouts.app')

@section('title')
    - Direcciones
@endsection

@section('main-content')
    <section>
        <hgroup>
            <h2>Direcciones</h2>
            <p>Organiza tus direcciones de envío</p>
        </hgroup>
    </section>

    <section>
        <table>
            <thead>
                <tr>
                    <th>Colonia</th>
                    <th>Barrio</th>
                    <th>Calle</th>
                    <th>No de casa</th>
                    <th>Ciudad</th>
                    <th>Departamento</th>
                    <th>Información adicional</th>
                    <th>Referencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addresses as $address)
                    <tr>
                        <td>{{ $address->cologne }}</td>
                        <td>{{ $address->neighborhood }}</td>
                        <td>{{ $address->street }}</td>
                        <td>{{ $address->house_number }}</td>
                        <td>{{ $address->city }}</td>
                        <td>{{ $address->state }}</td>
                        <td>{{ $address->additional_info }}</td>
                        <td>{{ $address->reference }}</td>
                        <td>
                            <p>Sin acciones</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
