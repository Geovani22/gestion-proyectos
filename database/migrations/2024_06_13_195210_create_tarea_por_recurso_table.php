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
        Schema::create('tarea_por_recurso', function (Blueprint $table) {
            $table->foreignId('Idtarea')->constrained('tareas', 'Idtarea')->onDelete('cascade');
            $table->foreignId('Idrecurso')->constrained('recursos', 'Idrecurso')->onDelete('cascade');
            $table->integer('Cantidades');
            $table->timestamps();

            $table->primary(['Idtarea', 'Idrecurso']);
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea_por_recurso');
    }
};
