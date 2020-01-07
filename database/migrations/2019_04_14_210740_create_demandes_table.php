<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomdemandeur');
            $table->string('prenomdemandeur');
            $table->string('importateur');
            $table->string('guceref')->nullable();
            $table->string('marque');
            $table->string('modele');
            $table->string('status');
            $table->string('statusidc');
            $table->string('filepdf')->nullable();
            $table->bigInteger('laboratoire_id');
            $table->bigInteger('typeproduit_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('demandes');
    }
}
