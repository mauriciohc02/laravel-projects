<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        // Para verificar que el user este autenticado
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validaciones
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        // Como si se hiciera un INSERT INTO
        // En base al Models/Post.php filleable se realiza el registro
        Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id // El Post lo hace quien esta autenticado, por eso se agrega su id para la relacion en la DB
        ]);

        /*
        // Otra forma de crear registros
        // Nueva instancia
        $post = new Post;
        // Se llenan los campos
        $post->titulo = $request->titulo;
        $post->descripcion = $request->descripcion;
        $post->imagen = $request->imagen;
        $post->user_id = auth()->user()->id;
        // Se guarda
        $post->save();
        */

        return redirect()->route('posts.index', auth()->user()->username);
    }
}
