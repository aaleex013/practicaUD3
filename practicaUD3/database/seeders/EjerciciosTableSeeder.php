<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ejercicios')->insert([
            [
                'nombre' => 'Press de Banca',
                'musculo' => 'Pectoral',
                'descripcion' => 'Ejercicio de fuerza para desarrollar el músculo pectoral ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sentadilla',
                'musculo' => 'Cuádriceps',
                'descripcion' => 'Ejercicio  para fortalecer las piernas y gluteos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Remo',
                'musculo' => 'Dorsal',
                'descripcion' => 'Ejercicio para trabajar la espalda y el biceps.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
