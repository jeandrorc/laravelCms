@extends('site.layout.default',['page'=>'CONTATO'])

@section('main')
    <div class="wrapper-inside">
        <div class="wrapper-inside-head">
            <div class="container">
                @include('flash::message')
                <h1 class="inside-title"> CONTATO </h1>
            </div>
        </div>

        <div class="inside-body">
            <div class="container">
                <div class="col-sm-6">
                    <h2 class="title-section">  <span>ENTRE EM CONTATO</span></h2>
                    <form action="{{ route('site.contact') }}" class="contact-form" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group">
                            <label for="name">Nome: *</label>
                            <input type="text" id="name" name="name" placeholder="Informe seu nome" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: *</label>
                            <input type="email" id="email" name="email" placeholder="Informe seu email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone/Celular: *</label>
                            <input type="tel" id="phone" name="phone" placeholder="Informe seu telefone ou celular" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem: </label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">

                            <button class="btn btn-primary"> Enviar mensagem</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h2 class="title-section"> <span>ENDEREÇO</span></h2>
                    @forelse($data->elementos as $info)
                        <div class="info">
                            <h3> {{ $info->titulo }}</h3>
                            {!! $info->texto !!}
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    </div>
@endsection
