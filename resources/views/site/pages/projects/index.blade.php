@extends('site.layout.default',['page'=>$data->titulo])

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
                    @forelse($projects as $item)
                        <div class="col-sm-6">
                            <div class="item-project">
                                <a href="{{ route('site.projects.show', [$item->slug]) }}">
                                    <div class="cover">
                                        <img src="{{ $item->cover() }}" alt="">
                                    </div>
                                    <h3> {{ $item->titulo }}</h3>
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
