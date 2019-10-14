<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = "admin";
        $role->descripcion = "Administrador";
        $role->save();

        $role = new Role();
        $role->nombre = "jefeoperaciones";
        $role->descripcion = "Jefe de operaciones";
        $role->save();

        $role = new Role();
        $role->nombre = "operaciones";
        $role->descripcion = "Encargados de operaciones";
        $role->save();

        $role = new Role();
        $role->nombre = "secretaria";
        $role->descripcion = "Secretaria";
        $role->save();
    }
}
