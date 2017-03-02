@extends('site.layout.default',['page'=>'Galeria'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title">{{ $data->titulo }}</h1>
            </div>
        </div>

        <div class="inside-body galeria">
            <div class="container">
                <div class="row">
                    @forelse($data->midias as $galeria)
                        <div class="col-sm-3">
                            <div class="galeria-image">
                                <a href="{{ $galeria->midia->url() }}" data-lightbox="{{ $data->slug }}">
                                    <img src="{{ $galeria->midia->cover() }}">
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    </div>
@endsection
