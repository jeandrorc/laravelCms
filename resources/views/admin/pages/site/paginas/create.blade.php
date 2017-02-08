@extends('admin.layout.default')
@section('titulo','Site / Seção / Criar nova seção')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
  	 <div class="btn-group">
	 	<a href="{{ route('admin.site.paginas.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	{!! Form::open(['method' => 'POST', 'route' => 'admin.site.paginas.store']) !!}

	<div class="box-body">
		@include('admin.pages.site.paginas._form')
	</div>
	<div class="box-footer">
			<div class="float-container">
				<button type="submit" class="btn btn-info pull-right btn-float btn-save"> <i class="fa fa-check"></i> Salvar</button>
			</div>
	</div>
	{!! Form::close() !!}
	
</div>
@endsection