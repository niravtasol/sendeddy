<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('front.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->startSection('pagestyle'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>
<body>
    <header class="header">
        <?php echo $__env->make('front.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('front.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->startSection('pagejs'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>