<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Guido Salazar',
            'email' =>'GuidoSalazar@gmail.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ])->assignRole('Administrador');



        User::create([
            'name' => 'Juan Cruz Santo',
            'email' => 'correo1@correo.com',
            'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]);
 
         User::create([
             'name' => 'Cliente 2',
             'email' =>'correo2@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          User::create([
             'name' => 'Cliente 3',
             'email' => 'correo3@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          User::create([
             'name' => 'Cliente 4',
             'email' => 'correo4@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
 
          User::create([
             'name' => 'Cliente 5',
             'email' => 'correo5@correo.com',
             'password' => '$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',

             
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
          ]);
    }
}
