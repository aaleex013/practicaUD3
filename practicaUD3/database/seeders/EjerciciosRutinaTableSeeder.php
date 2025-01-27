<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EjerciciosRutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutinaIds = DB::table('rutinas')->pluck('id')->toArray();
        $ejercicioIds = DB::table('ejercicios')->pluck('id')->toArray();
        DB::table('ejercicios_rutina')->insert([
            [
                'rutina_id' => $rutinaIds[0],
                'ejercicio_id' => $ejercicioIds[0],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[0],
                'ejercicio_id' => $ejercicioIds[1],
                'series' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[0],
                'ejercicio_id' => $ejercicioIds[2],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[1],
                'ejercicio_id' => $ejercicioIds[0],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[1],
                'ejercicio_id' => $ejercicioIds[1],
                'series' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[1],
                'ejercicio_id' => $ejercicioIds[2],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[2],
                'ejercicio_id' => $ejercicioIds[0],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[2],
                'ejercicio_id' => $ejercicioIds[1],
                'series' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rutina_id' => $rutinaIds[2],
                'ejercicio_id' => $ejercicioIds[2],
                'series' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
