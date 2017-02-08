<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Ultimos cadastros de email</h3>
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
						
						<th>Email</th>
						<th>Status</th>
					
					</tr>
				</thead>
				<tbody>
					@foreach ($emails as $email)
						<tr>
							<td>{{ $email->email}}</td>
							<td>{{ $email->getAtivo() }}</td>
						</tr>
					@endforeach
					
					
				</tbody>
			</table>
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.box-body -->

	<!-- /.box-footer -->
</div>