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
        Schema::create('donnee_financieres', function (Blueprint $table) {
            $table->id();
            $table->integer("Nbre_Clients_Beneficiaires");
            $table->integer("Nbre_Transactions_Domestiques");
            $table->integer("Nbre_Transactions_Internationales");
            $table->integer("Nbre_CB_Annuel");
            $table->integer("Nbre_CE_Annuel");
            $table->integer("Solde_Stock_CE");
            $table->boolean("published")->default(false);
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
        Schema::dropIfExists('donnee_financieres');
    }
};
