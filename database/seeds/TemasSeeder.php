<?php

use App\Models\Tema;
use Illuminate\Database\Seeder;

class TemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Tema::create([
            'tema'          => 'Revision Filosofía institucional GQ Automatic',
            'tiempo'        => '2hrs',
            'debate'        => 'Revision de propuesta de filosofia Institucional GQ Automatic',
            'conclusion'    => 'Ajustar cambios de sintaxis'
        ]);

        Tema::create([
            'tema'          => 'Revision de página web',
            'tiempo'        => '1 hr',
            'debate'        => 'Revision del status de la pagina web de
                                GQ automatic asi como el acuerdo de cambios y mejoras',
            'conclusion'    => 'Se requieren ajustes y cierta infomacion
                                para completar diferentes secciones de la pagina'
        ]);
    }
}
