@extends('admin.layout.default')
@section('titulo','Site / Banner / Cadastrar novo banner')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.slider.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::open(['method' => 'POST', 'route' => 'admin.site.slider.store']) !!}

	<div class="box-body">
		@include('admin.pages.site.slider._form')
	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}

	<!-- /.box-body -->
</div>
@endsection