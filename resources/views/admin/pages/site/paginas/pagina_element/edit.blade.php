@extends('admin.layout.default')
@section('titulo','Site / Seção /'. \App\Models\Pagina::find($item->pagina_id)->titulo.' / Item / '.$item->titulo.' / Editar')


@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.paginas.edit',[$item->pagina_id])}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
{{-- 	 	<a href="{{ route('admin.site.item_pagina.create',[$item->pagina_id])}}" class="btn btn-default"><i class="fa fa-plus"></i> Adicionar novo elemento</a> --}}

	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($item, ['route' => ['admin.site.item_pagina.update', $item->id], 'method' => 'PUT']) !!}
	

	<div class="box-body">
		@include('admin.pages.site.paginas.pagina_element._form')
		<div class="col-md-3">
		<div data-media-files>
			<ul>
				@forelse ($item->midias as $element)
					<li  data-item-row>
						<img src="{{$element->midia->url()}}">
						<div class="btn-group">
							<a href="{{$element->midia->url()}}" target="_blank" class="btn btn-default"><i class="fa fa-search"></i></a>
							<button data-del-item data-url="{{ route('admin.site.item_pagina.delete.midia',[$element->id])}}" type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
						</div>
					</li>
				@empty
					{{-- empty expr --}}
				@endforelse

			</ul>
		</div>
		</div>

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
