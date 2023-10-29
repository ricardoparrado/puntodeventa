@extends('layouts.app')

@section('titulo', 'Editar Cliente')
@section('cabecera', 'Editar Cliente')

@section('content')
<div class="container mx-auto mt-8">
    <div class="w-full max-w-sm mx-auto">
        <div class="card bg-white rounded-lg shadow-lg">
            <div class="card-body space-y-4">
                <h1 class="text-2xl font-semibold">Editar Cliente</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nombre" class="block font-medium mb-2">Nombre:</label>
                        <input type="text" name="nombre" class="w-full p-2 border border-gray-300 rounded" id="nombre" value="{{ $cliente->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="block font-medium mb-2">Correo Electrónico:</label>
                        <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" id="email" value="{{ $cliente->email }}">
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="block font-medium mb-2">Teléfono:</label>
                        <input type="text" name="telefono" class="w-full p-2 border border-gray-300 rounded" id="telefono" value="{{ $cliente->telefono }}">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
