<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;



    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
}
