@extends('admin.layout.default')
@section('titulo','Categorias')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.blog.categoria.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.blog.categoria.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
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
					<th>POSTS</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($categorias as $categoria)
				<tr data-item-row>
					<td>{{$categoria->titulo}}</td>
					<td>{{$categoria->descricao}}</td>
					<td>{!! $categoria->ativo()!!}</td>
					<td>{{ $categoria->posts->count() }}</td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.blog.categoria.edit',[$categoria->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$categoria->titulo}}" data-del-item data-url="{{ route('admin.blog.categoria.delete',[$categoria->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
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