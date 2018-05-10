<?php

use Minuta\Models\Role;
use Minuta\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name','=','administrador')->first();

		// PERMISOS DE CONFIGURACION
		$permision = new Permission();
		$permision->name 		= 'configuraciones_generales';
		$permision->display_name = 'Configuración general plataforma';
		$permision->description  = 'Puede realizar cambios Globales ';
		$permision->save();
    }
}
