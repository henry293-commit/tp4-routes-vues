<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function single($id)
    {
        $article = Article::find($id);
        return view('articles.single', ['article' => $article]);
    }
}
