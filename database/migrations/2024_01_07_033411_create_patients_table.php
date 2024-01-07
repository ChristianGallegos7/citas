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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->date('Fecha_Nacimiento');
            $table->string('Genero', 10);
            $table->string('Direccion', 100);
            $table->string('Telefono', 15);
            $table->string('Correo_Electronico', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
