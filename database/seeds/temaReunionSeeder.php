<?php

use App\Models\Tema;
use App\Models\Reunion;
use Illuminate\Database\Seeder;

class temaReunionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reunion = Reunion::where('tipoReunion', '=', 'Revisión Avances Página Web')->firstOrFail();
        $tema = Tema::where('tema', '=', 'Revision Filosofía institucional GQ Automatic')->firstOrFail();

        DB::table('tema_reunion')->insert([
        'idReunion'  => $reunion->id,
        'idTema'    => $tema->id
        ]);


    }
}
