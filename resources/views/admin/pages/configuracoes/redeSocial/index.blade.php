	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.configuracao.social.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Adicionar Rede social</a>
	
	 </div>
	</div>
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>
					<th>LINK</th>
					<th>ICONE</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($redeSocial as $social)
				<tr data-item-row>
					<td>{{$social->titulo}}</td>
					<td>{{$social->link}}</td>
					<td><i class="{{ $social->icone }}"></i></td>
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.configuracao.social.edit',[$social->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$social->titulo}}" data-del-item data-url="{{ route('admin.configuracao.social.delete',[$social->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
						</div>
					</td>
				</tr>
			@empty
				{{-- empty expr --}}
			@endforelse

			</tbody>
		</table>
	</div>