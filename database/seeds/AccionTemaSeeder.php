<?php

use Minuta\Models\Tema;
use Minuta\Models\Acciones;
use Illuminate\Database\Seeder;

class AccionTemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accion = Acciones::where('elementos', '=', 'Cambios Acerca de nosotros')->firstOrFail();
        $tema = Tema::where('tema', '=', 'Revision Filosofía institucional GQ Automatic')->firstOrFail();

        DB::table('accion_tema')->insert([
        'idAccion'  => $accion->id,
        'idTema'    => $tema->id
        ]);

        $tema2 = Tema::where('tema', '=', 'Revision de página web')
                    ->firstOrFail();

        $accion2 = Acciones::where('elementos', '=', 'Reordenar la información para que aparezcan primero')
                    ->firstOrFail();

        DB::table('accion_tema')->insert([
        'idAccion'  => $accion2->id,
        'idTema'    => $tema2->id
        ]);

        $accion3 = Acciones::where('elementos', '=', 'Agregar Marca Manuli y descacarle porque es la principal')
                    ->firstOrFail();

        DB::table('accion_tema')->insert([
        'idAccion'  => $accion3->id,
        'idTema'    => $tema2->id
        ]);
    }
}
