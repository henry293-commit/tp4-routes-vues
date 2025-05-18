<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            ['id' => 1, 'description' => 'Article 1', 'poids' => 200, 'couleur' => 'Vert', 'prix_achat' => 100.5, 'fournisseur_id' => 2],
            ['id' => 2, 'description' => 'Article 2', 'poids' => 300, 'couleur' => 'Vert', 'prix_achat' => 150.3, 'fournisseur_id' => 3],
            ['id' => 3, 'description' => 'Article 3', 'poids' => 300, 'couleur' => 'Bleu', 'prix_achat' => 200.5, 'fournisseur_id' => 2],
            ['id' => 4, 'description' => 'Article 4', 'poids' => 500, 'couleur' => 'Bleu', 'prix_achat' => 130.0, 'fournisseur_id' => 2],
            ['id' => 5, 'description' => 'Article 5', 'poids' => 550, 'couleur' => 'Violet', 'prix_achat' => 70.0, 'fournisseur_id' => 1],
        ]);
    }
}
