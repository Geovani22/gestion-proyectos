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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('Id_proyecto');
            $table->text('Descripción');
            $table->date('Fecha_inicio');
            $table->date('Fecha_entrega');
            $table->decimal('Valor', 10, 2);
            $table->string('Lugar', 255);
            $table->foreignId('Responsable')->constrained('personas', 'Idpersona');
            $table->string('Estado', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
