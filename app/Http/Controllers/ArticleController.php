<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Load articles with their author (comments removed for now)
        $articles = Article::with('author')->get();

        return view('articles.index', compact('articles'));
    }
}

