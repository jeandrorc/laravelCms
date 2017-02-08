@extends('admin.layout.default')
@section('titulo','Site / Seção /'. \App\Models\Pagina::find($pagina)->titulo.' / Item / Cadastrar novo item')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.paginas.edit',[$pagina])}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::open(['method' => 'POST', 'route' => 'admin.site.item_pagina.store']) !!}
	<input type="hidden" name="pagina_id" value="{{$pagina}}">
	<div class="box-body">
		@include('admin.pages.site.paginas.pagina_element._form')
	</div>
	<div class="box-footer">
		<div class="float-container">
			<button type="submit" class="btn btn-info pull-right btn-float btn-save"> <i class="fa fa-check"></i> Salvar</button>
		</div>
	</div>
	{!! Form::close() !!}

	<!-- /.box-body -->
</div>
@endsection