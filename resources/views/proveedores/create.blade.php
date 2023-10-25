@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Proveedor</h1>

    <form method="POST" action="{{ route('proveedores.store') }}">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Proveedor</button>
    </form>
</div>
@endsection
