<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="ion ion-stats-bars"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Total Visitas hoje</span>
				{{-- <span class="info-box-number">{{ $visitas->count() }}<small></small></span> --}}
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-red"><i class="ion ion-document-text"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Posts No blog</span>
				<span class="info-box-number">{{ $blogPosts->count() }}</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="ion ion-ios-email-outline"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Emails Cadastrados</span>
				<span class="info-box-number">{{ $emails->count() }}</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-yellow"><i class="ion ion-earth"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Total de Visitas</span>
				<span class="info-box-number">{{ $visitas->count() }}</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
</div>