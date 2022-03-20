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
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('Code_Agence');
            $table->integer('Type_Agence');
            $table->double('Latitude');
            $table->double('Longitude');
            $table->string('Code_Commune');
            $table->string('Code_Region');
            $table->string('Code_Province');
            $table->integer('Effectif_Siege');
            $table->integer('Effectif_Terrain');
            $table->integer('Effectif_Total');
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
        Schema::dropIfExists('agences');
    }
};
