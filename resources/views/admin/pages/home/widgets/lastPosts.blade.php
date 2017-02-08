<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Ultimos Posts</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-margin">
				<thead>
					<tr>
						<th>Post ID</th>
						<th>Titulo</th>
						<th>Categoria</th>
						<th>Slug</th>
						<th>Status</th>
						<th>Views</th>
						<th>
							
						</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($blogPosts as $post)
						<tr data-item-row>
							<td>{{$post->id}}</td>
							<td>{{$post->titulo}}</td>
							<td>{{ $post->categoria->titulo }}</td>
							<td>{{ $post->slug }}</td>
							<td>{!! $post->ativo()!!}</td>
							<td> {!! $post->views() !!}</td>
							<td class="row-buttons">
								<div class="btn-group">
									<a href="{{ route('admin.blog.post.edit',[$post->id]) }}" class="btn btn-default">Editar <i class="fa fa-edit"></i></a>
									<button data-item-titulo="{{$post->titulo}}" data-del-item data-url="{{ route('admin.blog.post.delete',[$post->id])}}" type="button" class="btn btn-default">Excluir <i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
					@empty
						{{-- empty expr --}}
					@endforelse
					
				</tbody>
			</table>
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<div class="btn-group">
		 	<a href="{{ route('admin.blog.post.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> NOVO</a>
		 	<a href="{{ route('admin.blog.post.index')}}" class="btn btn-default"><i class="fa fa-bars"></i> LISTAR</a>
		 </div>
	</div>
	<!-- /.box-footer -->
</div>