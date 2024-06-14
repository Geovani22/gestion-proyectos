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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('Idpersona');
            $table->string('Nombre', 255);
            $table->string('Apellidos', 255);
            $table->string('Dirección', 255);
            $table->string('Teléfono', 20)->nullable();
            $table->char('Sexo', 1)->nullable();
            $table->date('Fecha_nacimiento')->nullable();
            $table->string('Profesión', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
