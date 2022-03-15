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
            $table->string("ID_Client");
            $table->integer("TYPE_DOSSIER_CLIENT");
            $table->string("ID_DOSSIER_CLIENT");
            $table->string("ID_CONTRAT");
            $table->string("TYPE_PRET");
            $table->integer("CODE_AGENCE");
            $table->string("PORTEFEUILLE_AGENT");
            $table->string("ACTIVITE");
            $table->double("MONTANT");
            $table->string("CHARGE_MENSUELLE");
            $table->string("DUREE_PRET");
            $table->string("REVENU_MENSUEL_NET");
            $table->string("PERIODICITE_REMBOURSEMENT");
            $table->string("GARANTIE");
            $table->string("PERIODE_GRACE");
            $table->string("TAUX_INTERET_ACCORDE");
            $table->date("DATE_DECAISSEMENT");
            $table->date("DATE_PREMIER_REMBOURSEMENT");
            $table->date("DATE_DERNIER_REMBOURSEMENT");
            $table->integer("ENCOURS");
            $table->boolean("CREANCE_ABANDON");
            $table->integer("STATUT_DOSSIER_Client");
            $table->integer("RETARD_JOURS");
            $table->string("MONTANT_RADIATION");
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
