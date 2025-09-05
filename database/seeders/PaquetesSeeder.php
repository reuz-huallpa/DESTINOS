<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('paquetes')->insert([
            [
                'nombre' => 'Playa Caribe',
                'descripcion' => 'Disfruta de 5 días y 4 noches en un resort todo incluido frente al mar Caribe. Actividades acuáticas, gastronomía y relax.',
                'precio' => 1200.00,
                'duracion' => '5 días / 4 noches',
                'imagen' => 'paquetes/playa-caribe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Aventura Andina',
                'descripcion' => 'Explora los Andes con guías expertos. Caminatas, cultura local y paisajes impresionantes en un paquete de 7 días.',
                'precio' => 950.50,
                'duracion' => '7 días / 6 noches',
                'imagen' => 'paquetes/aventura-andina.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Selva Amazónica',
                'descripcion' => 'Vive la experiencia de la selva con excursiones, avistamiento de fauna y hospedaje ecológico. 4 días de naturaleza pura.',
                'precio' => 800.00,
                'duracion' => '4 días / 3 noches',
                'imagen' => 'paquetes/selva-amazonica.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
