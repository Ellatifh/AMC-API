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
            $table->string("ID_CLIENT");
            $table->string("STATUT");
            $table->string("STATUT_MARITAL");
            $table->string("NIVEAU_ETUDE");
            $table->string("PROFESSION");
            $table->string("SEXE");
            $table->string("ANNEE_NAISSANCE");
            $table->string("NOMBRE_PERSONNE_CHARGE");
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
