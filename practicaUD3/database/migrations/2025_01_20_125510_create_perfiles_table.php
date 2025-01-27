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
        if (!Schema::hasTable('perfiles')) {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->unique();
            $table->integer('edad');
            $table->string('estado_fisico')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfiles');
    }
};
