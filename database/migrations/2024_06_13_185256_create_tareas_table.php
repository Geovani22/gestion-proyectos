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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id('Idtarea');
            $table->text('Descripción');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->foreignId('Idactividad')->constrained('actividades', 'Idactividad')->onDelete('cascade');
            $table->string('Estado', 50);
            $table->decimal('Presupuesto', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
