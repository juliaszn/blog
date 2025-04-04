@extends('layouts.main')

@section('content')
    <section class="site-section pt-5">
        <div class="container">
            @if(isset($category))
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2 class="mb-4">{{$category->title}}</h2>
                    </div>
                </div>
            @endif
            @if (isset($query))
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2 class="mb-4">Поиск: {{ $query }}</h2>
                    </div>
                </div>
            @endif
            @if (isset($query) && count($articles) == 0)
                <div class="not-found">
                    No results
                </div>
            @endif
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row mb-5 mt-5">

                        <div class="col-md-12">
                            @foreach($articles as $article)
                                <div class="post-entry-horzontal">
                                    <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">
                                        <div class="image element-animate fadeIn element-animated"
                                             data-animate-effect="fadeIn"
                                             style="background-image: url(/storage/{{$article->preview_image}});"></div>
                                        <span class="text">
                                                <div class="post-meta">
                                                    <span class="mr-2">{{$article->formatted_published_at}}</span> •
                                                    <span class="mr-2">{{$article->category->title}}</span>
                                                </div>
                                            <h2>{{$article->title}}</h2>
                                             <div class="preview-text mr-2">{{$article->preview_text}}</div>
                                        </span>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 text-center">

                        </div>
                    </div>
                </div>

                @include('blocks.right')

            </div>
        </div>
    </section>
@endsection

