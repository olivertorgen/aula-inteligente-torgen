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
        Schema::create('aula_disponibilidad', function (Blueprint $table) {
            $table->unsignedBigInteger('aula_id');
            $table->unsignedBigInteger('disponibilidad_id');
            $table->timestamps();

            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->foreign('disponibilidad_id')->references('id')->on('disponibilidad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_disponibilidad');
    }
};
