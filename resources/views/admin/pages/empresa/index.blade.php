@extends('admin.layout.default')
@section('titulo','Editar dados da empresa')

@section('content')
{!! Form::model($empresa, ['route' => ['admin.empresa.update', $empresa->id], 'method' => 'PUT']) !!}
<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">
            Definições da empresa
        </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('descricao_curta') ? ' has-error' : '' }}">
                            {!! Form::label('descricao_curta', 'Descrição curta:') !!}
                            {!! Form::textarea('descricao_curta', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('descricao_curta') }}
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('descricao_longa') ? ' has-error' : '' }}">
                            {!! Form::label('descricao_longa', 'Descrição longa:') !!}
                            {!! Form::textarea('descricao_longa', null, ['class' => 'form-control','data-ckeditor']) !!}
                            <small class="text-danger">
                                {{ $errors->first('descricao_longa') }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('nome_fantasia') ? ' has-error' : '' }}">
                            {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
                            {!! Form::text('nome_fantasia', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('nome_fantasia') }}
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('razao_social') ? ' has-error' : '' }}">
                            {!! Form::label('razao_social', 'Razão Social:') !!}
                            {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('razao_social') }}
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">
                                {{ $errors->first('email') }}
                            </small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            {!! Form::label('telefone', 'Telefone') !!}
                            {!! Form::text('telefone', null, ['class' => 'form-control','data-mask-fone']) !!}
                            <small class="text-danger">
                                {{ $errors->first('telefone') }}
                            </small>
                        </div>
                    </div>
                </div>
                {{-- IMAGEM UPLOADER --}}
                <div class="row">
                    Logo:
                    <div class="col-md-6">
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus">
                        </i>
                        <span>
                            Selecionar logo
                        </span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input data-fileupload="" id="fileupload" name="logo" type="file" value="{{ $empresa->logo }}">
                        </input>
                    </span>
                        <!-- The global progress bar -->
                        <div class="progress" id="progress">
                            <div class="progress-bar progress-bar-success">
                            </div>
                        </div>
                        <!-- The container for the uploaded files -->
                        <div class="files" id="files">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="logo" height="80" src="{{ $empresa->Logo() }}" width="100"/>
                    </div>
                </div>
                {{-- IMAGEM UPLOADER --}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="form-group{{ $errors->has('logradouro') ? ' has-error' : '' }}">
                    {!! Form::label('logradouro', 'Logradouro:') !!}
					    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">
                        {{ $errors->first('logradouro') }}
                    </small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                    {!! Form::label('numero', 'Numero:') !!}
					    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">
                        {{ $errors->first('numero') }}
                    </small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('bairo') ? ' has-error' : '' }}">
                    {!! Form::label('bairro', 'Bairro:') !!}
					    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">
                        {{ $errors->first('bairo') }}
                    </small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                    {!! Form::label('cidade', 'Cidade:') !!}
					    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">
                        {{ $errors->first('cidade') }}
                    </small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                    {!! Form::label('estado', 'Estado:') !!}
					    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">
                        {{ $errors->first('estado') }}
                    </small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                    {!! Form::label('cep', 'Cep:') !!}
					    {!! Form::text('cep', null, ['class' => 'form-control','data-mask-cep']) !!}
                    <small class="text-danger">
                        {{ $errors->first('cep') }}
                    </small>
                </div>
            </div>
        </div>
        <hr>
        </hr>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="float-container">
			<button type="submit" class="btn btn-info pull-right btn-float btn-save"> <i class="fa fa-check"></i> Salvar</button>
		</div>
    </div>
</div>
{!! Form::close() !!}
@endsection
