<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FournisseurSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('fournisseurs')->insert([
            ['id' => 1, 'nom' => 'Henry', 'ville' => 'Kinshasa'],
            ['id' => 2, 'nom' => '', 'ville' => 'Lubumbashi'],
            ['id' => 2, 'nom' => 'Dyna', 'ville' => ''],
            ['id' => 3, 'nom' => 'Henry Kalota', 'ville' => 'Agadir'],
        ]);
    }
}
