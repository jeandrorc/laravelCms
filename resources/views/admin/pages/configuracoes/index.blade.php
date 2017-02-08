@extends('admin.layout.default')
@section('titulo','Configurações')
@section('subtitulo','')

@section('content')
    {!! Form::model($configuracao, ['route' => ['admin.configuracao.update', $configuracao->id], 'method' => 'PUT']) !!}
    <div class="box box-solid">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            {!! Form::label('titulo', 'Titulo:') !!}
                            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('titulo') }}
                            </small>
                        </div>
                    </div>
                </div>
                <fieldset>

                    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                        {!! Form::label('descricao', 'Descrição:') !!}
                        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('descricao') }}</small>
                    </div>

                </fieldset>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::select('status',['ATIVO'=>'ATIVO','MANUTENCAO'=>'MANUTENCAO','CONSTRUCAO'=>'CONSTRUCAO'], null, ['id' => 'status', 'class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('status') }}
                            </small>
                        </div>
                    </div>
                    <hr>
                    @include('admin.pages.configuracoes._mailConfig')
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="float-container">
                <button type="submit" class="btn btn-info pull-right btn-float btn-save"><i class="fa fa-check"></i>
                    Salvar
                </button>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    {!! Form::close() !!}
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">
                Redes Sociais
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @include('admin.pages.configuracoes.redeSocial.index')
        </div>
    </div>
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">
                Contatos
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @include('admin.pages.configuracoes.contato.index')
        </div>
    </div>
@endsection
