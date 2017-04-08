@extends('site.layout.default',['page'=>'Galeria'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title">Galeria</h1>
            </div>
        </div>

        <div class="inside-body galeria">
            <div class="container">
                <div class="row">
                    @forelse($data as $galeria)
                        <div class="col-sm-3">
                            <a href="{{ $galeria->link() }}" class="item-galeria">
                                <div class="galeria-cover">
                                    <img src="{{ $galeria->cover() }}" alt="">
                                </div>
                                <div class="galeria-description">
                                    <h3> {{ $galeria->titulo }}</h3>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    </div>
@endsection
