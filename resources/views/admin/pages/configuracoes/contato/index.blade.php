	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.configuracao.contato.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Adicionar contato</a>
	
	 </div>
	</div>
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TIPO</th>
					<th>CONTATO</th>
				
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($contatos as $contato)
				<tr data-item-row>
					<td>{{$contato->tipo}}</td>
					<td>{{$contato->valor}}</td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.configuracao.contato.edit',[$contato->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$contato->titulo}}" data-del-item data-url="{{ route('admin.configuracao.contato.delete',[$contato->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
						</div>
					</td>
				</tr>
			@empty
				{{-- empty expr --}}
			@endforelse

			</tbody>
		</table>
	</div>