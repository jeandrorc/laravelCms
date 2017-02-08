@extends('admin.layout.default')
@section('titulo','Dashboard')
@section('content')
		{{-- @include('admin.pages.home.widgets.basicInfo') --}}

<div class="row">
	<div class="col-sm-6">
		{{-- @include('admin.pages.home.widgets.lastPosts') --}}
	</div>	
	<div class="col-sm-6">
		{{-- @include('admin.pages.home.widgets.lastEmails') --}}
	</div>	
</div>
<div class="row">
		{{-- @include('admin.pages.home.widgets.chartAccess') --}}
	
</div>

@endsection