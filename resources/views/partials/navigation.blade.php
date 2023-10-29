<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/css/app.css">
    <title>Punto de Venta</title>
</head>
<body>
    <header>
        <nav class="bg-blue-500 py-4">
            <div class="container mx-auto flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('logo.png') }}" alt="Logo de Tu Aplicación" class="w-8 h-8">
                    <span class="text-white text-xl font-bold">Punto de Venta</span>
                </div>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:underline">Inicio</a></li>
                    <li><a href="/dashboard" class="text-white hover:underline">Panel de Control</a></li>
                    <li><a href="/productos" class="text-white hover:underline">Productos</a></li>
                    <li><a href="/ventas" class="text-white hover:underline">Ventas</a></li>
                    <li><a href="/clientes" class="text-white hover:underline">Clientes</a></li>
                    <li><a href="/compras" class="text-white hover:underline">Compras</a></li>
                    <li><a href="/proveedores" class="text-white hover:underline">Proveedores</a></li>
                    <li><a href="/categorias" class="text-white hover:underline">Categorías</a></li>
                </ul>
            </div>
        </nav>        
    </header>
    
    <script type="module" src="/dist/js/app.js"></script> 
</body>
</html>
