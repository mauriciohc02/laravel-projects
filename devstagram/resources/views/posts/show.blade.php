@extends('layouts.app')

@section('titulo')
    {{ $post->titulo }}
@endsection

@section('contenido')
    <div class="container mx-auto md:flex">
        <div class="md:w-1/2">
            <img class="border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800 rounded-lg shadown-xl"
                src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen de {{ $post->titulo }}">

            <div class="p-3">
                <p>
                    0 Likes
                </p>
            </div>

            <div>
                <p class="font-bold">
                    {{-- Obtiene el username de la relacion user() en Models/Post.php --}}
                    {{ $post->user->username }}
                </p>

                <p class="text-sm text-gray-500">
                    {{-- diffForHumans() funcion para dar formato legible a las fechas --}}
                    {{ $post->created_at->diffForHumans() }}
                </p>

                <p class="mt-5">
                    {{ $post->descripcion }}
                </p>
            </div>

            @auth
                {{-- Para saber si el user autenticado es quien esta en el post para eliminar --}}
                @if ($post->user_id === auth()->user()->id)
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        {{-- Spoofing Method: Permite agregar otro tipo de peticiones --}}
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar Post"
                            class="bg-red-500 hover:bg-red-600 p-2 rounded-lg text-white font-bold mt-4 cursor-pointer">
                    </form>
                @endif
            @endauth
        </div>

        <div class="md:w-1/2 p-5">
            <div class="rounded-lg shadow-xl bg-white p-5 mb-5">
                @auth
                    <p class="text-xl font-bold text-center mb-4">
                        Agrega un Nuevo Comentario
                    </p>

                    @if (session('mensaje'))
                        <div class="bg-green-500 p-2 rounded-lg mb-6 text-white text-center uppercase font-bold">
                            {{ session('mensaje') }}
                        </div>
                    @endif

                    <form action="{{ route('comentarios.store', ['user' => $user, 'post' => $post]) }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">
                                Añade un Comentario
                            </label>
                            <textarea id="comentario" name="comentario" placeholder="Agrega un comentario"
                                class="border p-3 w-full rounded-lg
                            @error('comentario')
                                border-red-500
                            @enderror"></textarea>

                            @error('comentario')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <input type="submit" value="Comentar"
                            class="bg-sky-600 hover:bg-sky-700 trasition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                    </form>
                @endauth

                <div class="bg-white rounded-lg shadow-xl mb-5 max-h-96 overflow-y-scroll mt-10">
                    @if ($post->comentarios->count())
                        {{-- Si hay al menos 1 comentario --}}
                        @foreach ($post->comentarios as $comentario)
                            <div class="p-5 border-gray-300 border-b">
                                {{-- Lleva a ruta /{user:username} --}}
                                <a href="{{ route('posts.index', $comentario->user) }}" class="font-bold">
                                    {{ $comentario->user->username }}
                                </a>

                                <p>
                                    {{ $comentario->comentario }}
                                </p>

                                <p class="text-sm text-gray-500 text-right">
                                    {{ $comentario->created_at->diffForHumans() }}
                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-600 uppercase text-sm text-center font-bold p-10">
                            Ningún Comentario por Mostrar
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
