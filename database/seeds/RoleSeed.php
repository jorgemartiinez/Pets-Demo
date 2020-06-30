<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // * ROL ADMINISTRADOR
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Rol de administrador, tiene acceso a un panel de administración para gestionar el sistema';
        $role->save();

        // * ROL USUARIO
        $role = new Role();
        $role->name = 'user';
        $role->description = 'Rol de usuario, puede crear anuncios';
        $role->save();
    }
}
