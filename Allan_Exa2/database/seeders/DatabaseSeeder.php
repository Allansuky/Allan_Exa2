<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'Allan@example.com',
            'password' => bcrypt('123'),
        ]);

        Equipo::factory()->create([
            'id' => 'A123',
            'codigo' => '123',+
            'nombre' => 'Dell XPS 13',
            'marca' => 'Dell',
            'fecha_adquisicion' => '2023-01-15',
            'estado' => 'Disponible',
            'created_at' => '2023-01-15 00:00:00',
            'updated_at' => '2023-01-15 00:00:00',
        ]);
    }
}
