<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post) // Se requiere Post, pero es necesario pasar User por el orden
    {
        // User $user es el dueño del post, por lo tanto no se ocupa aquí, se require el user del autenticado
        // Validaciones
        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        // Como si se hiciera un INSERT INTO
        // En base al Models/Comentario.php filleable se realiza el registro
        Comentario::create([
            'user_id' => auth()->user()->id, // id de user autenticado
            'post_id' => $post->id,
            'comentario' => $request->comentario
        ]);

        return back()->with('mensaje', 'Comentario Realizado Correctamente');
    }

    public function destroy(User $user, Post $post, Comentario $comentario)
    {
        // Usa ComentarioPolicy para determinar si el user es capaz de hacer tal acción
        $this->authorize('delete', $comentario);
        // Como si se hiciera un DELETE FROM comentarios WHERE id=$comentario->id;
        $comentario->delete();

        // Redirecciona
        return redirect()->route('posts.show', ['user' => $user->username, 'post' => $post]);
    }
}
