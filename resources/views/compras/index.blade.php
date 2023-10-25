@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Compras</h1>

    <a href="{{ route('compras.create') }}" class="btn btn-primary">Nueva Compra</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra->proveedor->nombre }}</td>
                    <td>{{ $compra->producto->nombre }}</td>
                    <td>{{ $compra->cantidad }}</td>
                    <td>{{ $compra->total }}</td>
                    <td>
                        <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
