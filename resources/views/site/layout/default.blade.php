<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials._favicons')
    @include('partials._globalMeta')
    <title>{{ $titulo or $empresa->titulo }} | {{ $page or "" }}</title>
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="site">
@include('site.layout.partials._header')
<main class="site-content">
    @yield('main')
</main>
@include('site.layout.partials._footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
@include('partials._scripts')
@stack('scripts')
@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
@endif
</body>
</html>