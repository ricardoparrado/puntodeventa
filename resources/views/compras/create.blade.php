@extends('layouts.app')

@section('titulo', 'Nueva Compra')
@section('cabecera', 'Nueva Compra')

@section('content')
<div class="container mx-auto mt-8">
    <div class="w-full max-w-md mx-auto">
        <div class="card bg-white rounded-lg shadow-lg">
            <div class="card-body">
                <h1 class="text-2xl font-semibold">Nueva Compra</h1>

                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('compras.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="proveedor_id" class="block font-medium">Proveedor</label>
                        <select name="proveedor_id" class="select select-bordered w-full">
                            @foreach ($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="producto_id" class="block font-medium">Producto</label>
                        <select name="producto_id" class="select select-bordered w-full">
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="cantidad" class="block font-medium">Cantidad</label>
                        <input type="number" name="cantidad" class="input input-bordered w-full">
                    </div>

                    <div class="mb-4">
                        <label for="total" class="block font-medium">Total</label>
                        <input type="text" name="total" class="input input-bordered w-full">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="btn btn-primary">Guardar Compra</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
