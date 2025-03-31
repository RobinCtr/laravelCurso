<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark text-white p-3">
        <nav class="container d-flex justify-content-between">

        </nav>
    </header>

    <main class="container mt-4">
        <!-- contenedor principal -->
        <div class="row">
            <div class="col">
                <h1 class="text-center">Bienvenido a Mi Aplicación</h1>
            </div>
            <!-- Seleccionar un tipo de operacion -->
        </div>

        <div class="row mt-4">
            <div class="col">
                <h2 class="text-center">Selecciona un tipo de operación</h2>
            </div>
            <!-- Sumar -->
            <div class="row mt-4">
                <!-- input number -->
                @php $x = 5; $y = 3; @endphp
                <div>
                    <a href="{{ route('actividadUno.sumar', ['x' => $x, 'y' => $y]) }}" class="btn btn-primary">Sumar</a>
                    <a href="{{ route('actividadUno.restar', ['x' => $x, 'y' => $y]) }}" class="btn btn-primary">Restar</a>
                    <a href="{{ route('actividadUno.multiplicar', ['x' => $x, 'y' => $y]) }}" class="btn btn-primary">Multiplicar</a>
                    <a href="{{ route('actividadUno.dividir', ['x' => $x, 'y' => $y]) }}" class="btn btn-primary">Dividir</a>
                </div>

                <a href="{{route('admin_user.create')}}">Index</a>

            </div>
           
        </div>
    </main>

    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


           
</body>

</html>