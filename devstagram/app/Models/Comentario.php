<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    // Son los datos que se va a llenar en la DB
    protected $fillable = [
        'user_id',
        'post_id',
        'comentario'
    ];

    // Crea relacion Belongs To, un comentario pertenece a un usuario
    public function user()
    {
        // belongsTo() es la relacion Belongs To
        return $this->belongsTo(User::class);
        // $ sail artisan tinker
        // > $comentario = App\Models\Comentario::find(2);
        // > $comentario->user;
    }
}
