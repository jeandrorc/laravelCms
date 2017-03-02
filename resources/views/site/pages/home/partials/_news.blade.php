<section id="news" class="section-secundary">
    <div class="container">
        <h2 class="title-section"> <span>Ultimas Notícias</span> </h2>
        <div class="row">
            @if($videos->first())
                <div class="col-sm-6">
                    <div class="home-featured">
                        {!! $videos->first()->getCover() !!}
                    </div>
                </div>
            @endif
            <div class="col-sm-{{$videos->first() ? '6':'12'}}">
                @forelse($news->take($videos->first() ? 3 : 6) as $notice)
                    <div class="">
                        <div class="col-sm-{{$videos->first() ? '12':'6'}}">
                            <div class="notice-item">
                                <a href="{{ $notice->link() }}">
                                    <span class="notice-date">{{ $notice->data_publicacao }}</span>
                                    <h3> {{ $notice->titulo }} </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>