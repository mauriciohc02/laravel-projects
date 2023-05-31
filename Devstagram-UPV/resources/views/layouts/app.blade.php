<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal - @yield('titulo')</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        -->
    </head>
    <body>
        <nav>
            <a href=".">Main</a>
            <a href="./alumnos">Alumnos</a>
            <a href="./curriculum">Curriculum</a>
        </nav>

        <!--Manda a llamar esa section-->
        <h1 class="text-3xl font-bold underline">@yield('titulo')</h1>

        <hr>

        <h3>@yield('contenido')</h3>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
