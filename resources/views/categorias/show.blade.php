@extends('layouts.app')

@section('titulo', 'Detalles de la Categoría de Productos')
@section('cabecera', 'Detalles de la Categoría de Productos')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Detalles de la Categoría de Productos</h1>

        <div class="card w-full shadow-lg">
            <div class="card-body">
                <h5 class="text-xl font-semibold mb-2">Nombre: {{ $categoria->nombre }}</h5>
                <p class="text-gray-700">Descripción: {{ $categoria->descripcion }}</p>
            </div>
        </div>

        <a href="{{ route('categorias.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    </div>
@endsection
