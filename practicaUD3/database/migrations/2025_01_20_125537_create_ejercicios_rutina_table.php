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
        if (!Schema::hasTable('ejercicios_rutina')) {
        Schema::create('ejercicios_rutina', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rutina_id');
            $table->unsignedBigInteger('ejercicio_id');
            $table->integer('series');
            $table->timestamps();

            $table->foreign('rutina_id')->references('id')->on('rutinas')->onDelete('cascade');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios_rutina');
    }
};
