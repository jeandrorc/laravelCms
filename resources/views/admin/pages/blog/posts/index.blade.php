@extends('admin.layout.default')
@section('titulo','posts')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.blog.post.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.blog.post.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>
					<th>DESCRIÇÃO</th>
					<th>ATIVO</th>
					<th>CATEGORIA</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($posts as $post)
				<tr data-item-row>
					<td>{{$post->titulo}}</td>
					<td>{{$post->descricao}}</td>
					<td>{!! $post->ativo()!!}</td>
					<td>{{ $post->categoria->titulo }}</td>
					<td class="row-buttons">
						<div class="btn-group">
							{!! $post->destaqueBtn() !!}
							<a href="{{ route('admin.blog.post.edit',[$post->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$post->titulo}}" data-del-item data-url="{{ route('admin.blog.post.delete',[$post->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
						</div>
					</td>
				</tr>
			@empty
				{{-- empty expr --}}
			@endforelse

			</tbody>
		</table>
	</div>
	<div class="box-footer">
	</div>
	<!-- /.box-body -->
</div>
@endsection