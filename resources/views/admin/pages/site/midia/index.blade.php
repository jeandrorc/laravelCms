@extends('admin.layout.default')
@section('titulo','Midias')

@section('content')
<div class="box box-solid">
	<div class="box-header with-border">
	 <div class="btn-group">
	 	<a href="{{ route('admin.site.paginas.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
	 	<a href="{{ route('admin.site.paginas.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
	 </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">

	</div>
	<div class="box-footer">
	</div>
	<!-- /.box-body -->
</div>
@endsection