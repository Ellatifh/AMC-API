<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit_Annexe;
use Illuminate\Support\Str;

class ProduitAnnexeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit_Annexe::create([
            "Nbre_Clients_Beneficaires" => Str::random(20),
            "Nbre_Transactions_Domestiques" => Str::random(20),
            "Nbre_Transactions_Domestiques_COVID" => Str::random(20),
            "Nbre_Transactions_International" => Str::random(20),
            "Nbre_CB_Annuel" => Str::random(20),
            "Nbre_CE_Annuel" => Str::random(20),
            "Solde_Stock_CE" => Str::random(20)
        ]);
    }
}
