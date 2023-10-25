@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Categoría de Productos</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $categoria->nombre }}</h5>
                <p class="card-text">Descripción: {{ $categoria->descripcion }}</p>
            </div>
        </div>

        <a href="{{ route('categorias-productos.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    </div>
@endsection
