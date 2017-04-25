@extends('admin.layout.default')
@section('titulo','Configurações/Contato/Editar')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.configuracao.index')}}" class="btn btn-default"><i class="fa fa-cogs"></i> CONFIGURAÇÕES</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($contato, ['route' => ['admin.configuracao.contato.update', $contato->id], 'method' => 'PUT']) !!}
	
	<div class="box-body">
		@include('admin.pages.configuracoes.contato._form')
	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}
	
</div>
@endsection