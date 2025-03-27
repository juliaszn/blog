<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $categories = ArticleCategory::query()->where('active', true)->get();

            $latestArticles = Article::query()->latest('published_at')->take(3)->get();

            $view->with('categories', $categories);

            $view->with('latestArticles', $latestArticles);

        });
    }
}
