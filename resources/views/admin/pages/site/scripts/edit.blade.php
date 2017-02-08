@extends('admin.layout.default')
@section('titulo','Editar script '.$script->titulo)

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.scripts.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($script, ['route' => ['admin.site.scripts.update', $script->id], 'method' => 'PUT']) !!}
	

	<div class="box-body">
		@include('admin.pages.site.scripts._form')
		<div data-media-files>
		</div>
	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}

	<!-- /.box-body -->
</div>
@endsection