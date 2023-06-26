<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Si un user elimina cuenta, se lleva sus comentarios
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Si un post se elimina, se lleva sus comentarios
            $table->string('comentario');
            $table->timestamps();
            // $ sail artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
