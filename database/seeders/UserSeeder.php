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
        $usuarios = [
            [
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'id_sede' => 5 
            ],
            [
                'email' => 'user@example.com',
                'password' => bcrypt('user123'),
                'id_sede' => 7
            ],
        ];

        foreach ($usuarios as $usuario) {
            User::create($usuario);
        }
    }
}
