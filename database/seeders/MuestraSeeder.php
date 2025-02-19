<?php

namespace Database\Seeders;

use App\Models\Muestra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MuestraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $muestras = [
            [
                'fecha'             => '2025-01-01',
                'codigo'            => 'M001',
                'organo'            => 'Hígado',
                'descripcion_calidad' => 'Buen estado',
                'id_calidad'        => 3,
                'id_tipo_naturaleza'=> 4,
                'id_formato'        => 1,
                'id_user'           => 1
            ],
            [
                'fecha'             => '2025-01-02',
                'codigo'            => 'M002',
                'organo'            => 'Riñón',
                'descripcion_calidad' => 'Estado regular',
                'id_calidad'        => 6,
                'id_tipo_naturaleza'=> 1,
                'id_formato'        => 2,
                'id_user'           => 1
            ],
            
        ];

        foreach ($muestras as $muestra) {
            Muestra::create($muestra);
        }
    }
}
