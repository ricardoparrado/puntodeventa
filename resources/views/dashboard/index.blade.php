@extends('layouts.app')

@section('titulo', 'Panel de Control')
@section('cabecera', 'Panel de Control')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Panel de Control</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Estadísticas generales -->
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-2">Estadísticas Generales</h2>
                <!-- Aquí puedes mostrar estadísticas generales como ventas totales, ingresos, etc. -->
            </div>

            <!-- Ventas recientes -->
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-2">Ventas Recientes</h2>
                <!-- Aquí puedes mostrar una lista de ventas recientes con detalles. -->
            </div>

            <!-- Inventario -->
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-2">Inventario</h2>
                <!-- Aquí puedes mostrar un resumen del inventario actual. -->
            </div>

            <!-- Otras métricas -->
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-2">Otras Métricas</h2>
                <!-- Aquí puedes agregar otras métricas relevantes. -->
            </div>
        </div>
    </div>
@endsection
