<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidades;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidades = [
            ['nombre' => 'Cardiología'],
            ['nombre' => 'Pediatría'],
            ['nombre' => 'Ginecología'],
            ['nombre' => 'Oftalmología'],
            ['nombre' => 'Ortopedia'],
            ['nombre' => 'Dermatología'],
            ['nombre' => 'Psiquiatría'],
            ['nombre' => 'Endocrinología'],
            ['nombre' => 'Oncología'],
            ['nombre' => 'Neurología'],
        ];

        foreach ($especialidades as $especialidad) {
            Especialidades::create($especialidad);
        }
    }
}
