<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RutinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarioIds = DB::table('usuarios')->pluck('id')->toArray();
        DB::table('rutinas')->insert([
            [
                'usuario_id' => $usuarioIds[0],
                'nombre' => 'Rutina de Fuerza',
                'objetivo' => 'Aumentar la fuerza máxima en movimientos compuestos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => $usuarioIds[1],
                'nombre' => 'Rutina de Resistencia',
                'objetivo' => 'Mejorar la capacidad cardiovascular y resistencia muscular.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => $usuarioIds[2],
                'nombre' => 'Rutina de Hipertrofia',
                'objetivo' => 'Aumentar el volumen muscular.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
