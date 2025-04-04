<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::query()->where('active', true)->latest('published_at')->get();
        return view('article.index', compact('articles'));
    }

    public function category($category)
    {
        $category = ArticleCategory::query()->where('slug', $category)->firstOrFail();

        $articles = Article::query()->where('active', true)->where('category_id', $category->id)->latest(
            'published_at'
        )->get();

        return view('article.index', compact('articles', 'category'));
    }

    public function show($category, $article)
    {
        $article = Article::query()->where('slug', $article)->firstOrFail();

        return view('article.show', compact('article'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        if (!$query || $query == '') {
            abort(404, 'No results');
        }

        $articles = Article::query()->where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('detail_text', 'LIKE', '%' . $query . '%')
            ->get();
        return view('article.index', compact('articles', 'query'));
    }

}
