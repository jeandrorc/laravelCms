@extends('admin.layout.default')
@section('titulo','Site / Seção / '.$pagina->titulo.' /Editar')

@section('content')
<div class="box box-solid">
    <div class="box-header with-border">
        <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.site.paginas.index')}}">
                <i class="fa fa-bars">
                </i>
                LISTAR
            </a>
        </div>
    </div>
    <!-- /.box-header -->
    {!! Form::model($pagina, ['route' => ['admin.site.paginas.update', $pagina->id], 'method' => 'PUT']) !!}
    <div class="box-body">
        @include('admin.pages.site.paginas._form')
        <div class="col-md-3">
            <div data-media-files="">
                <ul>
                    @forelse ($pagina->midias as $element)
                    <li data-item-row="">
                        <img src="{{$element->midia->url()}}">
                            <div class="btn-group">
                                <a class="btn btn-default" href="{{$element->midia->url()}}" target="_blank">
                                    <i class="fa fa-search">
                                    </i>
                                </a>
                                <button class="btn btn-default" data-del-item="" data-url="{{ route('admin.site.paginas.delete.midia',[$element->id])}}" type="button">
                                    <i class="fa fa-trash">
                                    </i>
                                </button>
                            </div>
                        </img>
                    </li>
                    @empty
					{{-- empty expr --}}
				@endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <div class="float-container">
            <button class="btn btn-info pull-right btn-float btn-save" type="submit">
                <i class="fa fa-check">
                </i>
                Salvar
            </button>
        </div>
    </div>
    {!! Form::close() !!}
	@include('admin.pages.site.paginas.pagina_element.index')
    <!-- /.box-body -->
</div>
@endsection
