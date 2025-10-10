<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Load all articles with their authors and comments
        $articles = Article::with(['author', 'comments'])->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with(['author', 'comments'])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
