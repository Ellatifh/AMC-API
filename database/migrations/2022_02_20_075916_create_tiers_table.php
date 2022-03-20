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
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->string("ID_Client");
            $table->integer("Statut");
            $table->integer("Statut_Marital");
            $table->integer("Niveau_Etude");
            $table->string("Profession");
            $table->string("Sexe");
            $table->integer("Annee_Naissance");
            $table->integer("Nombre_Personnes_Charge");
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
        Schema::dropIfExists('tiers');
    }
};
