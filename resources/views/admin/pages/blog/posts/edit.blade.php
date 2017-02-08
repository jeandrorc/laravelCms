@extends('admin.layout.default')
@section('titulo','Blog/ Post/ '.$post->titulo.' /Editar')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.blog.post.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::model($post, ['route' => ['admin.blog.post.update', $post->id], 'method' => 'PUT']) !!}
	

	<div class="box-body">
		@include('admin.pages.blog.posts._form')
		<div class="coverPost">
			{!! $post->getCover() !!}
		</div>
		<div data-media-files>

			<ul>
				@forelse ($post->midias as $element)
					<li  data-item-row>
						<img src="{{$element->midia->url()}}">
						<div class="btn-group">
							<a href="{{$element->midia->url()}}" target="_blank" class="btn btn-default"><i class="fa fa-search"></i></a>
							<button data-del-item data-url="{{ route('admin.blog.post.delete.midia',[$element->id])}}" type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
						</div>
					</li>
				@empty
				
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