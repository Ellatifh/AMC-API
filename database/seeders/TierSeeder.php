<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tier;
use Illuminate\Support\Str;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create([
            "ID_CLIENT" => Str::random(20),
            "STATUT" => Str::random(20),
            "STATUT_MARITAL" => Str::random(20),
            "NIVEAU_ETUDE" => Str::random(20),
            "PROFESSION" => Str::random(20),
            "SEXE" => Str::random(20),
            "ANNEE_NAISSANCE" => Str::random(20),
            "NOMBRE_PERSONNE_CHARGE" => Str::random(20)
        ]);
    }
}
