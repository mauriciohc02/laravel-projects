@extends('layouts.devstagramApp')

@section('titulo')
    Registrate a Devstragram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <!-- insertar una imagen con el "asset(se accede a carpeta publica)" -->
            <img src="{{ Vite::asset('resources/images/usuario.svg') }}" alt="Imagen registro de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="" >
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input class="border p-3 w-full round-lg" type="text" name="name" id="name" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input class="border p-3 w-full round-lg" type="text" name="username" id="username" placeholder="Ingresa tu username">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input class="border p-3 w-full round-lg" type="email" name="email" id="email" placeholder="Ingresa tu correo">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input class="border p-3 w-full round-lg" type="password" name="password" id="password" placeholder="Ingresa tu constraseña">
                </div>
                <div class="mb-5">
                    <label for="password_confirm" class="mb-2 block uppercase text-gray-500 font-bold">Confrima Contraseña</label>
                    <input class="border p-3 w-full round-lg" type="password" name="password_confirm" id="password_confirm" placeholder="Confirma tu constraseña">
                </div>
                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors
                cursor pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection