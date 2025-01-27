<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EntrenadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entrenador')->insert([
            [
                'nombre' => 'Jose Martinez',
                'especializacion' => 'Hipertrofia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Juan Guijarro',
                'especializacion' => 'Entrenamiento Funcional',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laura Escribano',
                'especializacion' => 'CrossFit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
