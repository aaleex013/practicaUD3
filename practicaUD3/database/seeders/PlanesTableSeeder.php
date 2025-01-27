<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Eliminar registros previos
        DB::table('perfiles')->delete();
        DB::table('usuarios')->delete();
        DB::table('planes')->delete();
        DB::table('rutinas')->delete();


        // Insertar datos en la tabla 'planes'
        DB::table('planes')->insert([
            [
                'nombre' => 'Plan Basico',
                'precio' => 19.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Plan VIP',
                'precio' => 29.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Plan VIP PLUS',
                'precio' => 49.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insertar datos en la tabla 'perfiles'
        DB::table('perfiles')->insert([
            [
                'usuario_id' => 1,
                'edad' => 25,
                'estado_fisico' => 'Normal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 2,
                'edad' => 32,
                'estado_fisico' => 'Obesidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 3,
                'edad' => 20,
                'estado_fisico' => 'Ectomorfo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $planIds = DB::table('planes')->pluck('id')->toArray();
        $perfilIds = DB::table('perfiles')->pluck('id')->toArray();


        // Insertar datos en la tabla 'usuarios'
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Alejandro Hernandez',
                'correo' => 'alex.hdez@example.com',
                'perfil_id' => $perfilIds[0],
                'plan_id' => $planIds[0], // Plan Básico
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Fran Martinez',
                'correo' => 'fran.martinez@example.com',
                'perfil_id' => $perfilIds[1],
                'plan_id' => $planIds[1], // Plan Intermedio
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alfonso Lopez',
                'correo' => 'sete.lopez@example.com',
                'perfil_id' => $perfilIds[2],
                'plan_id' => $planIds[2], // Plan Avanzado
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}

