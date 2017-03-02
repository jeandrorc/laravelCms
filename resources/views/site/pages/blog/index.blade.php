@extends('site.layout.default',['page'=>'Noticias'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title">Noticias</h1>
            </div>
        </div>

        <div class="inside-body blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="post-list">
                            @forelse($posts as $post)
                                <div class="post-list-item">
                                    <a href="{{ $post->link() }}">
                                        @if($post->cover())
                                            <div class="post-list-item-cover">
                                                <img src="{{ $post->cover() }}" alt="{{ $post->slug }}">
                                            </div>
                                        @endif
                                        <div class="post-list-item-body">
                                            <span class="post-date">{{ $post->data_publicacao }}</span>
                                            <h3 class="post-list-item-title">{{ $post->titulo }}</h3>
                                        </div>
                                        <div class="post-list-item-footer">
                                            <span class="post-list-item-category">{{ $post->categoria->titulo }}</span>
                                        </div>
                                    </a>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <div class="pagination">
                            {{ $posts->links() }}
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
