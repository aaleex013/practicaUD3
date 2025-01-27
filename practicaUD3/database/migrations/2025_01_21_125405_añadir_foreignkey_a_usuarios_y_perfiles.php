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
        Schema::table('usuarios', function (Blueprint $table) {
            // Verificar si la columna 'perfil_id' ya existe
            if (!Schema::hasColumn('usuarios', 'perfil_id')) {
                $table->unsignedBigInteger('perfil_id')->nullable();
                $table->foreign('perfil_id')->references('id')->on('perfiles')->onDelete('cascade');
            }
        });
    
        Schema::table('perfiles', function (Blueprint $table) {
            // Verificar si la columna 'usuario_id' ya existe
            if (!Schema::hasColumn('perfiles', 'usuario_id')) {
                $table->unsignedBigInteger('usuario_id')->nullable();
                $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign(['perfil_id']);
            $table->dropColumn('perfil_id');
        });
    
        Schema::table('perfiles', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropColumn('usuario_id');
        });
    }
};
