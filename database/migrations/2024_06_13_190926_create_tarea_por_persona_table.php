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
        Schema::create('tarea_por_persona', function (Blueprint $table) {
            $table->foreignId('Idtarea')->constrained('tareas', 'Idtarea')->onDelete('cascade');
            $table->foreignId('Idpersona')->constrained('personas', 'Idpersona')->onDelete('cascade');
            $table->integer('Duracion');
            $table->timestamps();

            $table->primary(['Idtarea', 'Idpersona']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea_por_persona');
    }
};
