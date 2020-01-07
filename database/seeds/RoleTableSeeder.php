<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();


        $role_manager = new Role();
        $role_manager->name = 'admin';
        $role_manager->description = 'Administrateur';
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = 'aberme';
        $role_manager->description = 'Aberme';
        $role_manager->save();


        $role_manager = new Role();
        $role_manager->name = 'labo';
        $role_manager->description = 'Laboratoire';
        $role_manager->save();


        $role_manager = new Role();
        $role_manager->name = 'inspecteur';
        $role_manager->description = 'Inpecteur du commerce';
        $role_manager->save();
  }
}
