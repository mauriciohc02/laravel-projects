<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
    <!-- font-awesome -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- styles -->
  </head>
  <body>
    <!-- Encabezado de la pagina -->
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">Devstragram</h1>
            <!-- Navegación -->
            <nav class="flex gap-2 items-center">
                <a href="#" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        Devstragram UPV - Todos los derechos reservados {{now()->year}}
    </footer>
  </body>
</html>