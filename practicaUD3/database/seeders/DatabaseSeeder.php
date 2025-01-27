<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PlanesTableSeeder::class);
        $this->call(EntrenadorTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(RutinasTableSeeder::class);
        $this->call(PerfilesTableSeeder::class);
        $this->call(EjerciciosTableSeeder::class);
        $this->call(EjerciciosRutinaTableSeeder::class);
    }
}
