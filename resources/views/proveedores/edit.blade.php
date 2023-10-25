@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Proveedor</h1>

    <form method="POST" action="{{ route('proveedores.update', $proveedor->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proveedor->nombre }}">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" class="form-control">{{ $proveedor->direccion }}</textarea>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proveedor->telefono }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
