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
            $table->string('AMC_Nom');
            $table->integer('Effectif_Total');
            $table->integer('Charges_Global');
            $table->integer('Effectif_Siege');
            $table->integer('Effectif_Terrain');
            $table->integer('Nbre_Agences_Rural');
            $table->integer('Nbre_Agences_Urbain');
            $table->integer('Nbre_Guichets_Mobiles_Urbain');
            $table->integer("Nbre_Guichets_Mobiles_Rural");
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
