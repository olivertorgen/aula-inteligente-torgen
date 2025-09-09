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
        Schema::create('disponibilidad', function (Blueprint $table) {
            $table->id();
            $table->string('dia_semana');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamps();
        });

        Schema::create('aula_disponibilidad', function (Blueprint $table) {
            $table->foreignId('aula_id')->constrained('aulas')->onDelete('cascade');
            $table->foreignId('disponibilidad_id')->constrained('disponibilidad')->onDelete('cascade');
            $table->primary(['aula_id', 'disponibilidad_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_disponibilidad');
        Schema::dropIfExists('disponibilidad');
    }
};