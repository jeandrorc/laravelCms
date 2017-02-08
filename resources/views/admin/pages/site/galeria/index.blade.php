@extends('admin.layout.default')
@section('titulo','Galerias')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.site.galeria.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.site.galeria.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>
					<th>SLUG</th>
					<th>ATIVO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($galerias as $galeria)
				<tr data-item-row>
					<td>{{$galeria->titulo}}</td>
					<td>{{$galeria->slug}}</td>
					<td>{!! $galeria->ativo()!!}</td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.site.galeria.edit',[$galeria->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$galeria->titulo}}" data-del-item data-url="{{ route('admin.site.galeria.delete',[$galeria->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
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