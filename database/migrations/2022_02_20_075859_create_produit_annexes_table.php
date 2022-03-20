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
            $table->string("Produit_Annexe_Id");
            $table->double("Total_Bilan");
            $table->double("Fonds_Propres");
            $table->double("Dettes_CT");
            $table->double("Dettes_MLT");
            $table->double("Produits_Operations_Clienteles");
            $table->double("Charges_Exploitation");
            $table->double("Charges_Financieres");
            $table->double("Dotation_Provisions");
            $table->double("Resultat_Periode");
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
