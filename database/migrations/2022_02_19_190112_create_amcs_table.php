<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amcs', function (Blueprint $table) {
            $table->id();
            $table->string('Amc_Nom');
            $table->integer('Effectif_total');
            $table->integer('Charges_globales');
            $table->integer('Effectif_siège');
            $table->integer('Effectif_terrain');
            $table->integer('Nbre_agences_rural');
            $table->integer('Nbre_agences_urbain');
            $table->integer('Nbre_guichets_mobiles_urbain');
            $table->integer("Nbre_guichets_mobiles_rural");
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
        Schema::dropIfExists('amcs');
    }
};
