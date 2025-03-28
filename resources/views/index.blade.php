@extends('layouts.main')

@section('content')
    <section class="site-section pt-5 pb-5">
        <div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
                @foreach($latestArticles as $article)
                <div>
                    <a href="{{route('article.show', [$article->category->slug, $article->slug])}}" class="a-block d-flex align-items-center height-lg" style="background-image: url('/storage/{{$article->detail_image}}'); ">
                        <div class="text half-to-full">
                            <span class="category mb-5">{{$article->category->title}}</span>
                            <div class="post-meta">

                                <span class="mr-2">{{$article->formatted_published_at}}</span>

                            </div>
                            <h3>{{$article->title}}</h3>
                            <p>{!! $article->preview_text !!}</p>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </div>
    </div>
        </div>
    </section>
    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Latest Posts</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        @foreach($latestArticles as $article)
                        <div class="col-md-6">
                            <a href="{{route('article.show', [$article->category->slug, $article->slug])}}" class="blog-entry element-animate fadeIn element-animated" data-animate-effect="fadeIn">
                                <img src="/storage/{{$article->preview_image}}" alt="Image placeholder">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="mr-2">{{$article->formatted_published_at}}</span>
                                    </div>
                                    <h2>{{$article->title}}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

 @include('blocks.right')
            </div>
        </div>
    </section>
@endsection
