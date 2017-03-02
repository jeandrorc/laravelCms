@extends('site.layout.default',['page'=>'Home'])

@section('main')
@include('site.pages.home.partials._banner')
    @include('site.pages.home.partials._about')
    @include('site.pages.home.partials._news')
    @include('site.pages.home.partials._projetcs')
    @include('site.pages.home.partials._partners')
@endsection
