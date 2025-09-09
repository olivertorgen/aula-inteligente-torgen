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
        Schema::create('muebles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->timestamps();
        });

        Schema::create('aulas_muebles', function (Blueprint $table) {
            $table->foreignId('aula_id')->constrained('aulas')->onDelete('cascade');
            $table->foreignId('mueble_id')->constrained('muebles')->onDelete('cascade');
            $table->primary(['aula_id', 'mueble_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aulas_muebles');
        Schema::dropIfExists('muebles');
    }
};