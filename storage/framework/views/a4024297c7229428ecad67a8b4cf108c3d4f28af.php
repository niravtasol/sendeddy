<!doctype html>
<html>
<head>
    <?php echo $__env->make('admin.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->startSection('pagestyle'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>

        <!-- Aside menu -->
        <aside class="main-sidebar">
            <?php echo $__env->make('admin.layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </aside>

        <!--  Main Content Area -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Main footer -->
        <footer class="main-footer">
            <?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>

        <!-- Sidebar Right -->
        <aside class="control-sidebar control-sidebar-dark">
        <?php echo $__env->make('admin.layouts.aside-right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </aside>

        <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="<?php echo e(asset ("/bower_components/admin-lte/plugins/jquery/jquery.min.js")); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo e(asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js")); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset ("/bower_components/fastclick/lib/fastclick.js")); ?>"></script>

<script src="<?php echo e(asset ("/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")); ?>"></script>

<script src="<?php echo e(asset ("/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset ("/bower_components/admin-lte/dist/js/adminlte.min.js")); ?>" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

    <?php $__env->startSection('pagejs'); ?>
    <?php echo $__env->yieldSection(); ?>

</body>
</html>