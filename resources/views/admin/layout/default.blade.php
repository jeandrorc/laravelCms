<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JRCSW Gerencidador 1 | Dashboard</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  {{ Html::style('_admin/bootstrap/css/bootstrap.min.css') }}
  {{ Html::style('_admin/favicon/apple-touch-icon.png',['rel'=>'apple-touch-icon','sizes'=>'180x180']) }}
    <link rel="icon" type="image/png" href="{{asset('_admin/favicons/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('_admin/favicons/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('_admin/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('_admin/favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="api" content="{{ route('api.index') }}">

  {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}
  {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}
  {{ Html::style('_admin/css/AdminLTE.min.css') }}

  {{ Html::style('_admin/css/skins/_all-skins.min.css') }}

  {{ Html::style('plugins/iCheck/flat/blue.css') }}
  {{ Html::style('plugins/jqupload/css/jquery.fileupload-ui.css') }}
  {{ Html::style('plugins/jqupload/css/jquery.fileupload.css') }}
  {{ Html::style('plugins/datepicker/datepicker3.css')}}
  {{ Html::style('plugins/bootstrap-select/dist/css/bootstrap-select.css') }}

  {{ Html::style('plugins/morris/morris.css') }}
  {{ Html::style('plugins/datatables/jquery.dataTables.css') }}
  {{ Html::style('plugins/datatables/dataTables.bootstrap.css') }}
  {{ Html::style('_admin/css/custom.adim.css') }}

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>JRC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JRCWS</b>CMS 1.0</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
      @include('admin.layout.includes.menuTopo')
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layout.includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.includes.breadcrumbs')

    <!-- Main content -->
    <section class="content">
     @include('flash::message')
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2016 <a href="http://jrcsw.net">JRCWS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

{{ Html::script('plugins/jQuery/jquery-2.2.3.min.js') }}
{{ Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
{{ Html::script('_admin/bootstrap/js/bootstrap.min.js') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}
{{ Html::script('plugins/morris/morris.min.js')}}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}
{{ Html::script('plugins/daterangepicker/daterangepicker.js') }}
{{ Html::script('plugins/datepicker/bootstrap-datepicker.js')}}
{{ Html::script('plugins/slimScroll/jquery.slimscroll.min.js')}}
{{ Html::script('plugins/fastclick/fastclick.js')}}
{{ Html::script('plugins/datatables/jquery.dataTables.min.js')}}
{{ Html::script('plugins/datatables/dataTables.bootstrap.min.js')}}

{{-- JqueryUpload --}}
{{ Html::script('plugins/jqupload/js/jquery.fileupload.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-ui.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-process.js') }}
{{ Html::script('plugins/jqupload/js/jquery.iframe-transport.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-validate.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-image.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-video.js') }}
{{ Html::script('plugins/jqupload/js/jquery.fileupload-audio.js') }}

{{ Html::script('plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}
{{ Html::script('plugins/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.js') }}
{{ Html::script('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}
{{ Html::script('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}
{{ Html::script('_admin/js/app.js')}}
<script>
  window.Utils = window.Utils || {}
</script>
{{ Html::script('_admin/js/script.js')}}
</body>
</html>
