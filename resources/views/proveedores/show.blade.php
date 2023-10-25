@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Proveedor</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID de Proveedor: {{ $proveedor->id }}</h5>
            <p class="card-text">Nombre: {{ $proveedor->nombre }}</p>
            <p class="card-text">Dirección: {{ $proveedor->direccion }}</p>
            <p class="card-text">Teléfono: {{ $proveedor->telefono }}</p>
        </div>
    </div>

    <a href="{{ route('proveedores.index') }}" class="btn btn-primary mt-3">Volver a la Lista de Proveedores</a>
</div>
@endsection
