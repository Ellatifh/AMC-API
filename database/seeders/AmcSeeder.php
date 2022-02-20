<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Amc;
use Illuminate\Support\Str;

class AmcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AMC::create([
            'Amc_Nom' => Str::random(20),
            'Effectif_total' =>  rand(0, 20),
            'Charges_globales' =>  rand(0, 100),
            'Effectif_siège' =>  rand(0, 50),
            'Effectif_terrain' =>  rand(0, 50),
            'Nbre_agences_rural' =>  rand(0, 50),
            'Nbre_agences_urbain' =>  rand(0, 50),
            'Nbre_guichets_mobiles_urbain' =>  rand(0, 50),
            'Nbre_guichets_mobiles_rural' =>  rand(0, 50)
        ]);
    }
}
