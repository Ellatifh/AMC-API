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
            $table->string("Code_Agence");
            $table->string("Portefeuille_Agent");
            $table->string("Activite");
            $table->double("Charge_Mensuelle");
            $table->integer("Duree_Pret");
            $table->double("Revenu_Mensuel_Net");
            $table->double("Montant");
            $table->integer("Type_Pret");
            $table->integer("Periodicite_Remboursement");
            $table->integer("Garantie");
            $table->integer("Periode_Grace");
            $table->double("Taux_Interet_Accorde");
            $table->date("Date_Decaissement");
            $table->date("Date_Premier_Remboursement");
            $table->date("Date_Dernier_Remboursement");
            $table->double("Encours");
            $table->integer("Nombre_Jours_Retards");
            $table->boolean("Creance_Abandon");
            $table->double("Montant_Radiation");
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
