@extends('site.layout.default',['page'=>$post->titulo])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title">{{ $post->titulo }}</h1>
            </div>
        </div>

        <div class="inside-body galeria">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="post-show">
                            <div class="post-description">
                                {{ $post->descricao }}
                            </div>
                            <div class="post-cover">
                                <img src="{{ $post->cover() }}" alt="{{ $post->slug }}">
                            </div>
                            <span class="post-date">{{ $post->data_publicacao }}</span>
                            <div class="post-body">
                                {!! $post->texto !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        @include('site.pages.blog.partials._aside')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
