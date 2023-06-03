<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administradores')->insert([
            'nombre' => 'Guido Salazar Vargas',
            'correo' => 'GuidoSalazar@gmail.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            'user_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);

        
    }
}
