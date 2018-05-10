<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("roles")->insert(array(
            'name' => 'administrador',
            'display_name' => 'Administrador',
            'description' => 'Usuario con todos los privilegios dentro del sistema'
        ));

        \DB::table("roles")->insert(array(
            'name' => 'supervisor',
            'display_name' =>  'Supervisor',
            'description' => 'Usuario que puede aprobar las reuniones.',
        ));
    }
}
