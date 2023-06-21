<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Son los datos que se va a llenar en la DB
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    // Crea relacion Belongs To, un post pertenece a un usuario
    public function user()
    {
        // belongsTo() es la relacion Belongs To
        return $this->belongsTo(User::class)->select(['name', 'username']); // select() para traer los campos solicitados
        // $ sail artisan tinker
        // > $post = App\Models\Post::find(1);
        // > $post->user;
    }

    // Crea relacion One to Many, un post con muchos comentarios
    public function comentarios()
    {
        // hasMany() es la relacion One to Many
        return $this->hasMany(Comentario::class);
        // $ sail artisan tinker
        // > $post = App\Models\Post::find(1);
        // > $post->comentarios;
    }
}
