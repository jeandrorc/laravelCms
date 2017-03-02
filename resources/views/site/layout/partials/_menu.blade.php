<ul class="site-menu">
    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('site.index') }}">INICIO</a></li>
    <li class="{{ Request::is('quem-somos') ? 'active' : '' }}"><a href="{{ route('site.about') }}">QUEM SOMOS</a></li>
    <li class="{{ Request::is('servicos') ? 'active' : '' }}"><a href="{{ route('site.services') }}">SERVIÇOS</a></li>
    <li class="{{ Request::is('galeria*') ? 'active' : '' }}"><a href="{{ route('site.galeria.index') }}">GALERIA</a></li>
    <li class="{{ Request::is('nossos-projetos*') ? 'active' : '' }}"><a href="{{ route('site.projects.index') }}">NOSSOS PROJETOS</a></li>
    <li class="{{ Request::is('clientes') ? 'active' : '' }}"><a href="{{ route('site.clients') }}">CLIENTES</a></li>
    <li class="{{ Request::is('noticias*') ? 'active' : '' }}"><a href="{{ route('site.blog.index') }}">NOTÍCIAS</a></li>
    <li class="{{ Request::is('contato') ? 'active' : '' }}"><a href="{{ route('site.contact') }}">CONTATO</a></li>
</ul>