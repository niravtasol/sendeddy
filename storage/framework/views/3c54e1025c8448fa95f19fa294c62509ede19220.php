<header>
    <div class="container">
        <div class="row">
            <div class="inner-head-wrp">
                <div class="col-lg-3 col-sm-2 text-left sgp-logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/sgp-logo-inner.png')); ?>"></a>
                </div>
                <div class="col-lg-4 col-sm-3 text-center glob-logo">

                </div>
                <div class="col-lg-5 col-sm-7 head-right-wrp">
                    <div class="pull-right">
                        <div class="head-right">
                            <div class="profile-pic">
                                <div class="pro-box">
                                    <?php if(\Auth::User()->avatar != ''): ?>
                                        <img src="<?php echo e(url(\Auth::User()->avatar)); ?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo e(url('img/default-user-avtar.jpg')); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="user-wrp navbar-right">
                                <a href="<?php echo e(url('profile')); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(\Auth::User()->username); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo e(url('profile')); ?>"><?php echo e(__('users.profile')); ?></a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="<?php echo e(url('logout')); ?>"><?php echo e(__('users.logout')); ?></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->make('layouts/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<?php if(Session::has('alerts')): ?>
    <?php $__currentLoopData = Session::get('alerts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-<?php echo e($alert['type']); ?> alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="message">
                <?php echo e($alert['message']); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success alert-hideable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(Session::get('flash_message')); ?>

    </div>
<?php endif; ?>
<?php if(Session::has('delete_message')): ?>
    <div class="alert alert-danger alert-hideable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(Session::get('delete_message')); ?>

    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
