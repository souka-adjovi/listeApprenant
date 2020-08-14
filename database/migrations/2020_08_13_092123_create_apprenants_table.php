<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->unsignedBigInteger('tuteur_id');

            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('dateNaissance');
            $table->string('villeDorigine');
            $table->string('formation');
            $table->string('etablissementPrecedent');
            $table->integer('telephone');
            $table->string('email');
            $table->string('genre');
            $table->string('photo');
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
        Schema::dropIfExists('apprenants');
    }
}
