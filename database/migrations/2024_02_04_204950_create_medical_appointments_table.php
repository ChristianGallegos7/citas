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
        Schema::create('medical_appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time'); // Fecha y hora de la cita
            $table->enum('status', ['available', 'reserved', 'completed'])->default('available');
            $table->unsignedBigInteger('doctor_id'); // ID del médico asociado
            $table->timestamps();

            // Clave foránea para relacionar con la tabla de doctores
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_appointments');
    }
};
