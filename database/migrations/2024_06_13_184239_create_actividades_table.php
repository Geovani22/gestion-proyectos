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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id('Idactividad');
            $table->text('Descripción');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->foreignId('idproyecto')->constrained('proyectos', 'Id_proyecto')->onDelete('cascade');
            $table->foreignId('Responsable')->constrained('personas', 'Idpersona')->onDelete('cascade');
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
        Schema::dropIfExists('actividades');
    }
};
