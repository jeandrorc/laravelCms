@extends('admin.layout.default')
@section('titulo','Site / Banner / Editar')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.slider.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{{-- {!! Form::open(['method' => 'POST', 'route' => 'admin.site.slider.store']) !!} --}}
	{!! Form::model($slider, ['route' => ['admin.site.slider.update', $slider->id], 'method' => 'PUT']) !!}


	<div class="box-body">
		@include('admin.pages.site.slider._form')
		<div data-media-files>

			<ul>
				@forelse ($slider->midias as $element)
					<li  data-item-row>
						<img src="{{$element->midia->url()}}">
						<div class="btn-group">
							<a href="{{$element->midia->url()}}" target="_blank" class="btn btn-default"><i class="fa fa-search"></i></a>
							<button data-del-item data-url="{{ route('admin.site.slider.delete.midia',[$element->id])}}" type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
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