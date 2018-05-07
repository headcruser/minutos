<?php

use Minuta\Models\Acciones;
use Illuminate\Database\Seeder;

class AccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acciones::create([
            'elementos'    => 'Cambios Acerca de nosotros',
            'responsable'  => 'TCA',
            'plazo'        =>  date("Y-m-d")
        ]);

        Acciones::create([
            'elementos'    => 'Reordenar la información para que aparezcan primero',
            'responsable'  => 'TCA',
            'plazo'        =>  date("Y-m-d")
        ]);

        Acciones::create([
            'elementos'    => 'Agregar Marca Manuli y descacarle porque es la principal',
            'responsable'  => 'TCA',
            'plazo'        =>  date("Y-m-d")
        ]);
    }
}
