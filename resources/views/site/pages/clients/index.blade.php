@extends('site.layout.default',['page'=>$data->titulo])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title"> {{ $data->titulo }} </h1>
            </div>
        </div>

        <div class="inside-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>{{ $data->titulo }}</h2>
                        <p> {{ $data->descricao }} </p>
                        {!! $data->texto !!}
                    </div>
                </div>
                <div class="row">
                    @forelse($data->elementos as $cliente)
                        <div class="col-sm-3">
                            <div class="cliente-item">
                                <img src="{{ $cliente->cover() }}" alt="">
                                <h3> {{ $cliente->titulo }} </h3>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>

    </div>
@endsection
