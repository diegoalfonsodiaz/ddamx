<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('nombre','admin')->first();
        $role_jefeoperaciones = Role::where('nombre','jefeoperaciones')->first();
        $role_operaciones = Role::where('nombre','operaciones')->first();
        $role_secretaria = Role::where('nombre','secretaria')->first();

        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('administrador');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = "secretaria";
        $user->email = "secretaria@gmail.com";
        $user->password = bcrypt('secretaria');
        $user->save();
        $user->roles()->attach($role_secretaria);


        $user = new User();
        $user->name = "operaciones";
        $user->email = "operaciones@gmail.com";
        $user->password = bcrypt('operaciones');
        $user->save();
        $user->roles()->attach($role_operaciones);

        $user = new User();
        $user->name = "jefeoperaciones";
        $user->email = "jefeoperaciones@gmail.com";
        $user->password = bcrypt('jefeoperaciones');
        $user->save();
        $user->roles()->attach($role_jefeoperaciones);

    }
}
