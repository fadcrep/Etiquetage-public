<?php

use App\Models\Laboratoire;
use Illuminate\Database\Seeder;

class LaboratoireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labo = new Laboratoire();
        $labo->name = 'ANM';
        $labo->description  = 'ANM';
        $labo->save();
        $labo->typeproduits()->attach(['1','2']);

        $labo = new Laboratoire();
        $labo->name = 'EPAC';
        $labo->description  = 'EPAC';
        $labo->save();
        $labo->typeproduits()->attach('3');

    }
}
