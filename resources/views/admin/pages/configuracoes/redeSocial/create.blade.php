@extends('admin.layout.default')
@section('titulo','Configurações/Redes Sociais/Adicionar')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.configuracao.index')}}" class="btn btn-default"><i class="fa fa-cogs"></i> CONFIGURAÇÕES</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::open(['method' => 'POST', 'route' => 'admin.configuracao.social.store']) !!}

	<div class="box-body">
		@include('admin.pages.configuracoes.redeSocial._form')
	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}
	
</div>
@endsection