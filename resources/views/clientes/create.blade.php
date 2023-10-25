@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Cliente</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del cliente" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Número de teléfono">
        </div>
        <button type="submit" class="btn btn-primary">Crear Cliente</button>
    </form>
</div>
@endsection
