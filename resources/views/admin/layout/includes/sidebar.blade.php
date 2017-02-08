  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVEGAÇÃO</li>
        <li class="{!! (strpos(Request::route()->getName(),'.dashboard') ? 'active' : '') !!}">
            <a href="{{ route('admin.dashboard.index')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{!! (strpos(Request::route()->getName(),'.configuracao') ? 'active' : '') !!}">
            <a href="{{ route('admin.configuracao.index') }}">
                <i class="fa fa-cog"></i> <span>Configurações</span>
            </a>
        </li>
        <li class="{!! (strpos(Request::route()->getName(),'.empresa') ? 'active' : '') !!}">
            <a href="{{ route('admin.empresa.index')}}">
                <i class="fa fa-building-o"></i> <span>Empresa</span>
             </a>
        </li>
{{--         <li class="{!! (strpos(Request::route()->getName(),'.newsletter') ? 'active' : '') !!}">
            <a href="{{ route('admin.newsletter.index')}}">
               <i class="fa fa-envelope-square"></i> <span>Newsletter</span>
             </a>
        </li> --}}

        <li class="treeview {!! (strpos(Request::route()->getName(),'.site.') ? 'active' : '') !!}">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Site</span>
            <span class="pull-right-container">
                <i class="fa fa-caret-down"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{!! (strpos(Request::route()->getName(),'.paginas.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.paginas.index') }}"> 
                <i class="fa fa-files-o"></i>
                Seções
              </a>
            </li>
{{--             <li class="{!! (strpos(Request::route()->getName(),'.menu.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.menu.index') }}"> 
                <i class="fa fa-list-ol"></i> 
                Menu
              </a>
            </li> --}}
            <li class="{!! (strpos(Request::route()->getName(),'.slider.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.slider.index') }}"> 
                <i class="fa fa-sliders"></i> 
                Banners
              </a>
            </li>
{{--             <li class="{!! (strpos(Request::route()->getName(),'.midia.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.midia.index') }}"> 
                <i class="fa fa-picture-o"></i> 
                Mídias
              </a>
            </li> --}}
            <li class="{!! (strpos(Request::route()->getName(),'.galeria.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.galeria.index') }}"> 
                <i class="fa fa-file-photo-o"></i> 
                Galeria
              </a>
            </li>
            <li class="{!! (strpos(Request::route()->getName(),'.scripts.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.scripts.index') }}"> 
                <i class="fa fa-file-photo-o"></i> 
                Scripts
              </a>
            </li>
{{--             <li class="{!! (strpos(Request::route()->getName(),'.publicidade.') ? 'active' : '') !!}">
              <a href="{{ route('admin.site.publicidade.index') }}"> 
                <i class="fa fa-file-photo-o"></i> 
                Publicidade
              </a>
            </li> --}}
          </ul>
        </li>
        <li class="treeview {!! (strpos(Request::route()->getName(),'.blog.') ? 'active' : '') !!}">
            <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>Blog</span>
                <span class="pull-right-container">
                   <i class="fa fa-caret-down"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{!! (strpos(Request::route()->getName(),'.blog.categoria') ? 'active' : '') !!}">
                    <a href="{{ route('admin.blog.categoria.index' )}}"> <i class="fa fa-bars"></i> Categorias</a>
                </li>
                <li class="{!! (strpos(Request::route()->getName(),'.blog.post') ? 'active' : '') !!}">
                    <a href="{{ route('admin.blog.post.index') }}"> <i class="fa fa-newspaper-o"></i> Posts</a>
                </li>
            </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>