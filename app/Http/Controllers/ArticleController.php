<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getArticle()
    {
        dd($article = Article::first());

    }
}
