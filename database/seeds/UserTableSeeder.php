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
       

        $user = new User();
        $user->name = "director";
        $user->email = "dir@gmail.com";
        $user->password = bcrypt('ddamxdirxela19');
        $user->save();
        $user->roles()->attach($role_admin);


    }
}
