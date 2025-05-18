<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequetesController extends Controller
{
    public function index()
    {
        $fournisseurs = DB::table('fournisseurs')->get();
        $fournisseursAgadir = DB::table('fournisseurs')->where('ville', 'Agadir')->get();
        $nomsVilles = DB::table('fournisseurs')->select('nom', 'ville')->get();
        $villes = DB::table('fournisseurs')->distinct()->pluck('ville');

        $articles = DB::table('articles')->get();
        $descPoids = DB::table('articles')->select('description', 'poids')->get();
        $article1 = DB::table('articles')->where('id', 1)->first();
        $articlesVerts = DB::table('articles')->where('couleur', 'Vert')->select('id', 'description')->get();
        $articlesVertsPrix = DB::table('articles')->where('couleur', 'Vert')->where('prix_achat', '>', 500)->get();
        $articlesPoids = DB::table('articles')->whereBetween('poids', [200, 300])->get();
        $nbArticles = DB::table('articles')->count();
        $moyPrix = DB::table('articles')->avg('prix_achat');

        return view('requetes.index', compact(
            'fournisseurs',
            'fournisseursAgadir',
            'nomsVilles',
            'villes',
            'articles',
            'descPoids',
            'article1',
            'articlesVerts',
            'articlesVertsPrix',
            'articlesPoids',
            'nbArticles',
            'moyPrix'
        ));
    }
}
