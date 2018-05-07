<?php

use Minuta\Models\Reunion;
use Illuminate\Database\Seeder;

class ReunionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reunion::create([
            'convocado' => 'Erendira Quintero',
            'tipoReunion' => 'Revisión Avances Página Web',
            'fecha' => date("Y-m-d"),
            'hora' =>  new \DateTime('15:03:01.012345Z'),
            'lugar' => 'Oficinas de GQ Automatic',
            'organizador' => 'Erendira Quintero',
            'asistentes' => 'Damian Guerra , Barbara Arroyo',
            'status' => true,
        ]);
    }
}
