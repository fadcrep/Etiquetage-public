<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('importateur');
            $table->string('description');
            $table->string('quantite');
            $table->string('nserie');
            $table->string('provenance');
            $table->string('volume');
            $table->string('classe');
            $table->string('resultats');
            $table->string('certificat');
            $table->string('modele');
            $table->string('echantiollonnage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('importations');
    }
}
