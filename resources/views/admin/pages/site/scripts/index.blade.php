@extends('admin.layout.default')
@section('titulo','scripts')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.site.scripts.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.site.scripts.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>
					<th>ATIVO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($scripts as $script)
				<tr data-item-row>
					<td>{{$script->titulo}}</td>
					<td>{!! $script->ativo()!!}</td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.site.scripts.edit',[$script->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$script->titulo}}" data-del-item data-url="{{ route('admin.site.scripts.delete',[$script->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
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