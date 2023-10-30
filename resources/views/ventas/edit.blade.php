@extends('layouts.app')

@section('titulo', 'Editar Venta')
@section('cabecera', 'Editar Venta')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-md mx-auto">
            <div class="card bg-white rounded-lg shadow-lg">
                <div class="card-body">
                    <h1 class="text-2xl font-semibold mb-4">Editar Venta</h1>

                    @if ($errors->any())
                        <div class="bg-red-100 text-red-700 border border-red-400 px-4 py-3 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('ventas.update', $venta->id) }}" method="POST" class="w-full max-w-lg space-y-4">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="cliente_id" class="block font-medium mb-2">Cliente:</label>
                            <select name="cliente_id" id="cliente_id" class="w-full p-2 border border-gray-300 rounded"
                                required>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}" {{ $venta->cliente_id == $cliente->id ? 'selected' : '' }}>
                                        {{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="producto_id" class="block font-medium mb-2">Producto:</label>
                            <select name="producto_id" id="producto_id" class="w-full p-2 border border-gray-300 rounded"
                                required>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}"
                                        {{ $venta->producto_id == $producto->id ? 'selected' : '' }}>
                                        {{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="cantidad" class="block font-medium mb-2">Cantidad:</label>
                            <input type="number" name="cantidad" class="w-full p-2 border border-gray-300 rounded"
                                id="cantidad" value="{{ $venta->cantidad }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="total" class="block font-medium mb-2">Total:</label>
                            <input type="number" step="0.01" name="total"
                                class="w-full p-2 border border-gray-300 rounded" id="total" value="{{ $venta->total }}"
                                required>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mr-2">Actualizar
                                Venta</button>
                            <a href="{{ route('ventas.index') }}"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-2 px-4 rounded">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
