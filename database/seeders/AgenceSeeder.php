<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agence;
use Illuminate\Support\Str;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agence::create([
            'Code_Agence' => Str::random(20),
            'Type_Agence' => Str::random(20),
            'Latitude' => Str::random(20),
            'Longitude' => Str::random(20),
            'Code_Commune' => Str::random(20),
            'Code_Region' => rand(50,200),
            'Code_Province' => rand(50,200),
            'Effectif_Siege' => rand(50,200),
            'Effectif_Terrain' => rand(50,200),
            'Effectif_Total' => rand(50,200)
        ]);
    }
}
