<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Contrat;
use Illuminate\Support\Str;

class ContratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contrat::create([
            "ID_Contrat" => Str::random(20),
            "ID_Client" => Str::random(20),
            "ID_Dossier_Client" => Str::random(20),
            "Type_Dossier_Client" => rand(100,999),
            "Statut_Dossier_Client" => rand(100,999),
            "Code_Agence" => rand(100,999),
            "Portefeuille_Agent" => Str::random(20),
            "Activite" => Str::random(20),
            "Charge_mensuelle" => Str::random(20),
            "Duree_Pret" => Str::random(20),
            "revenu_Mensuel_Net" => Str::random(20),
            "Montant" => Str::random(20),
            "Type_pret" => Str::random(20),
            "Periodicite_Remboursement" => Str::random(20),
            "Garantie" => Str::random(20),
            "Periode_Grace" => Str::random(20),
            "Taux_Interet_Accorde" => Str::random(20),
            "Date_Decaissement" => Carbon::parse('2022-02-20'),
            "Date_Premier_Rembourssement" => Carbon::parse('2022-01-01'),
            "date_Dernier_Rembourssement" => Carbon::parse('2022-06-01'),
            "Encours" => rand(100,999),
            "Nombre_Jours_Retards" => rand(100,999),
            "Creance_Abandon" => false,
            "Montant_Radiation" => Str::random(20),
        ]);
    }
}
