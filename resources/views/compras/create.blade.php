@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Compra</h1>

    <form method="POST" action="{{ route('compras.store') }}">
        @csrf

        <div class="form-group">
            <label for="proveedor_id">Proveedor:</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="producto_id">Producto:</label>
            <select name="producto_id" id="producto_id" class="form-control">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control">
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="text" name="total" id="total" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Compra</button>
    </form>
</div>
@endsection
