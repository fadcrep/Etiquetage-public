<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();

        $role_admin  = Role::where('name', 'admin')->first();
        $role_aberme = Role::where('name', 'aberme')->first();
        $role_labo  = Role::where('name', 'labo')->first();
        $role_inspecteur  = Role::where('name', 'inspecteur')->first();

        $user = new User();
        $user->lastname = 'Agent';
        $user->firstname = 'Aberme';
        $user->email = 'aberme@mail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_aberme);

        $manager = new User();
        $manager->lastname = 'User';
        $manager->firstname = 'Administrateur';
        $manager->email = 'admin@mail.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_admin);

        $labo = new User();
        $labo->lastname = 'Laboratoire';
        $labo->firstname = 'ANM';
        $labo->laboratoire_id = 1;
        $labo->email = 'labo@anm.com';
        $labo->password = bcrypt('secret');
        $labo->save();
        $labo->roles()->attach($role_labo);

        $labo = new User();
        $labo->lastname = 'Laboratoire';
        $labo->firstname = 'EPAC';
        $labo->laboratoire_id = 2;
        $labo->email = 'labo@epac.com';
        $labo->password = bcrypt('secret');
        $labo->save();
        $labo->roles()->attach($role_labo);


        $test = new User();
        $test->lastname = 'Inspecteur';
        $test->firstname = 'Agent';
        $test->email = 'inspecteur@mail.com';
        $test->password = bcrypt('secret');
        $test->save();
        $test->roles()->attach($role_inspecteur);

    }
}
