<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Punto de Venta</title>

    <!-- Agrega enlaces a hojas de estilo CSS de Tailwind y DaisyUI -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Agrega enlaces a scripts JS si es necesario -->

</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4">
        <nav class="container mx-auto flex items-center justify-between">
            <a href="/" class="text-white text-2xl font-bold">Tu Punto de Venta</a>
            <!-- Aquí puedes agregar la barra de navegación si la necesitas -->
        </nav>
    </header>
    <main class="container mx-auto mt-8 p-4">
        @yield('content')
    </main>
    <footer class="bg-blue-500 p-4">
        <div class="container mx-auto text-white text-center">
            <!-- Pie de página, información de contacto, etc. -->
            © {{ date('Y') }} Tu Punto de Venta
        </div>
    </footer>

    <!-- Agrega scripts JS si es necesario -->
</body>
</html>
