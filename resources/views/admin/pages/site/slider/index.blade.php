@extends('admin.layout.default')
@section('titulo','Site / Banners')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.site.slider.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.site.slider.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table datatable table-condensed table-hover" data-datatable >
			<thead>
				<tr>
					<th>TITULO</th>
					<th>DESCRIÇÃO</th>
					{{-- <th>PAGINA</th> --}}
					<th></th>
				</tr>
			</thead>
			<tbody>
			@forelse ($sliders as $slider)
				<tr data-item-row>
					<td>{{$slider->titulo}}</td>
					<td>{{$slider->descricao}}</td>
					{{-- <td> {{ $slider->pagina }} </td> --}}
					<td class="row-buttons">
						<div class="btn-group">
							<a href="{{ route('admin.site.slider.edit',[$slider->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
							<button data-item-titulo="{{$slider->titulo}}" data-del-item data-url="{{ route('admin.site.slider.delete',[$slider->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
						</div>
					</td>
				</tr>
			@empty
			
			@endforelse

			</tbody>
		</table>
	</div>
	<div class="box-footer">
	</div>
	<!-- /.box-body -->
</div>
@endsection