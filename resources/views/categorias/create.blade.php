@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Categoría de Productos</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('categorias-productos.store') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ old('descripcion') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear Categoría</button>
            <a href="{{ route('categorias-productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
