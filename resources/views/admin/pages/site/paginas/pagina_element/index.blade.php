<div class="box box-solid">
	<!-- /.box-header -->
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.site.item_pagina.create',[$pagina->id])}}" class="btn btn-default"><i class="fa fa-plus"></i> Adicionar novo elemento</a>
	 </div>
	</div>
	<div class="box-body">
		<h4>Elementos da Pagina</h4>
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>

					<th>ATIVO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($elementos as $elemento)
				<tr data-item-row>
					<td>{{$elemento->titulo}}</td>
			
					<td>{!! $elemento->ativo()!!}</td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.site.item_pagina.edit',[$elemento->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$elemento->titulo}}" data-del-item data-url="{{ route('admin.site.item_pagina.delete',[$elemento->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
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