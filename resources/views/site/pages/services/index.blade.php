@extends('site.layout.default',['page'=>'Serviços'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                <h1 class="inside-title"> Serviços </h1>
            </div>
        </div>

        <div class="inside-body">
            <div class="container">
                {!! $data->texto !!}
            </div>
        </div>

    </div>
@endsection
