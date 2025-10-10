<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $aricles = \App\Models\Article::with('author', 'comments')->get();
        return view('articles.index', compact(articles));
    }
}

