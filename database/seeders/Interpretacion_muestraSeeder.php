<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interpretacion_muestra;

class Interpretacion_muestraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interpretaciones = [
            [
                'descripcion'       => 'Interpretación 1 para M001',
                'id_muestra'        => 1, // ID de la muestra con código M001
                'id_interpretacion' => 1, // ID en la tabla interpretaciones
            ],
            [
                'descripcion'       => 'Interpretación 2 para M001',
                'id_muestra'        => 1,
                'id_interpretacion' => 2,
            ],
            [
                'descripcion'       => 'Interpretación 1 para M002',
                'id_muestra'        => 2, // ID de la muestra con código M002
                'id_interpretacion' => 3,
            ],
            [
                'descripcion'       => 'Interpretación 2 para M002',
                'id_muestra'        => 2,
                'id_interpretacion' => 4,
            ],
            // Agrega más interpretaciones según necesites...
        ];

        foreach ($interpretaciones as $interpretacion) {
            Interpretacion_muestra::create($interpretacion);
        }
    }
}
