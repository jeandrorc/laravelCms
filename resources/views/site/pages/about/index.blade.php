@extends('site.layout.default',['page'=>'Quem somos'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title"> QUEM SOMOS </h1>
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
                    <div class="col-sm-6">
                        @forelse($data->elementos as $elemento)
                            <div class="inside-item">
                                <h4 class="title-section"> <span> {{ $elemento->titulo }} </span></h4>
                                <p> {{ $elemento->descricao }} </p>
                                {!! $elemento->texto !!}
                            </div>
                        @empty
                        @endforelse
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
