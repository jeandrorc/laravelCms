@extends('admin.layout.default')
@section('titulo','Blog / Categoria /  '.$categoria->titulo.' /Editar')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.blog.categoria.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($categoria, ['route' => ['admin.blog.categoria.update', $categoria->id], 'method' => 'PUT']) !!}
	

	<div class="box-body">
		@include('admin.pages.blog.categorias._form')

	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}

	<!-- /.box-body -->
</div>
@endsection