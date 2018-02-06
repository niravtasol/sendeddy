<!doctype html>
<html>
<head>
    @include('admin.layouts.head')
    @section('pagestyle')
    @show
</head>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @include('admin.layouts.header')
        </header>

        <!-- Aside menu -->
        <aside class="main-sidebar">
            @include('admin.layouts.aside')
        </aside>

        <!--  Main Content Area -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main footer -->
        <footer class="main-footer">
            @include('admin.layouts.footer')
        </footer>

        <!-- Sidebar Right -->
        <aside class="control-sidebar control-sidebar-dark">
        @include('admin.layouts.aside-right')
        </aside>

        <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>

<script src="{{ asset ("/bower_components/fastclick/lib/fastclick.js") }}"></script>

<script src="{{ asset ("/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js") }}"></script>

<script src="{{ asset ("/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js") }}" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

    @section('pagejs')
    @show

</body>
</html>