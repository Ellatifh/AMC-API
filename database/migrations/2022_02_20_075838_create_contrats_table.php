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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string("ID_Contrat");
            $table->string("ID_Client");
            $table->string("ID_Dossier_Client");
            $table->integer("Type_Dossier_Client");
            $table->integer("Statut_Dossier_Client");
            $table->integer("Code_Agence");
            $table->string("Portefeuille_Agent");
            $table->string("Activite");
            $table->string("Charge_mensuelle");
            $table->string("Duree_Pret");
            $table->string("revenu_Mensuel_Net");
            $table->string("Montant");
            $table->string("Type_pret");
            $table->string("Periodicite_Remboursement");
            $table->string("Garantie");
            $table->string("Periode_Grace");
            $table->string("Taux_Interet_Accorde");
            $table->date("Date_Decaissement");
            $table->date("Date_Premier_Rembourssement");
            $table->date("date_Dernier_Rembourssement");
            $table->integer("Encours");
            $table->integer("Nombre_Jours_Retards");
            $table->boolean("Creance_Abandon");
            $table->string("Montant_Radiation");
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
        Schema::dropIfExists('contrats');
    }
};
