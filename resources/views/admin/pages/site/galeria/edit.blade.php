@extends('admin.layout.default')
@section('titulo','Editar Galeria')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.galeria.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($galeria, ['route' => ['admin.site.galeria.update', $galeria->id], 'method' => 'PUT']) !!}

	<div class="box-body">
		@include('admin.pages.site.galeria._form')
		<div data-media-files>
			<ul>
				@forelse ($galeria->midias as $element)

					<li  data-item-row>
						<img src="{{$element->midia->url()}}">
						<div class="btn-group">
							<a href="{{$element->midia->url()}}" target="_blank" class="btn btn-default"><i class="fa fa-search"></i></a>
							<button data-del-item data-url="{{ route('admin.site.galeria.delete.midia',[$element->id])}}" type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
						</div>
					</li>
				@empty
					{{-- empty expr --}}
				@endforelse
			</ul>
		</div>
	</div>
	<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right"> <i class="fa fa-check"></i> Salvar</button>
	</div>
	{!! Form::close() !!}

	<!-- /.box-body -->
</div>
@endsection