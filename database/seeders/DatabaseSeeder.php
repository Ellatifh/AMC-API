<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AmcSeeder;
use Database\Seeders\AgenceSeeder;
use Database\Seeders\ContratSeeder;
use Database\Seeders\ProduitAnnexeSeeder;
use Database\Seeders\TierSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AmcSeeder::class); 
        $this->call(AgenceSeeder::class); 
        $this->call(ContratSeeder::class); 
        $this->call(ProduitAnnexeSeeder::class); 
        $this->call(TierSeeder::class); 
    }
}
