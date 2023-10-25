@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Ventas</h1>

    <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Nueva Venta</a>

    @if (count($ventas) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->cliente->nombre }}</td>
                        <td>{{ $venta->producto->nombre }}</td>
                        <td>{{ $venta->cantidad }}</td>
                        <td>{{ $venta->total }}</td>
                        <td>
                            <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay ventas registradas.</p>
    @endif
</div>
@endsection
