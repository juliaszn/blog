<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::query()->where('active', true)->latest('published_at')->get();
        return view('index', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }
}
