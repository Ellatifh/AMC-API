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
        Schema::create('produit_annexes', function (Blueprint $table) {
            $table->id();
            $table->string("Nbre_Clients_Beneficaires");
            $table->string("Nbre_Transactions_Domestiques");
            $table->string("Nbre_Transactions_Domestiques_COVID");
            $table->string("Nbre_Transactions_International");
            $table->string("Nbre_CB_Annuel");
            $table->string("Nbre_CE_Annuel");
            $table->string("Solde_Stock_CE");
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
        Schema::dropIfExists('produit_annexes');
    }
};
