<?php

use App\Models\Typeproduit;
use Illuminate\Database\Seeder;

class TypeProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Typeproduit();
        $type->name = 'Réfrigérateur';
        $type->description  = 'Réfrigérateur';
        $type->save();

        $type = new Typeproduit();
        $type->name = 'Lampe';
        $type->description  = 'Lampe';
        $type->save();

        $type = new Typeproduit();
        $type->name = 'Climatiseur';
        $type->description  = 'Climatiseur';
        $type->save();
    }
}