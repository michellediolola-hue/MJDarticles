<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// 👇 This defines your homepage route
Route::get('/', [ArticleController::class, 
'index'])->name('articles.index');

