<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    public function valider(Request $request)
    {
        return redirect()->back()->with('success', 'Articles validés avec succès.');
    }
}
