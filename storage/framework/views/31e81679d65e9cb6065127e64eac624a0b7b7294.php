    <?php $__env->startSection('title'); ?>
        How It Works
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <!-- Additional Style -->
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>


    <section class="mainsection">
        <div class="container">
            <div id="block_works" class="block-section-2">
                <div class="row animatedParent animateOnce" data-sequence="800">
                    <div class="col-md-6">
                        <div class="left-block animated fadeInLeft" data-id="1">
                            <h1>How It Works</h1>
                            <div class="list1">
                                <div class="numberlist">
                                    1
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                                <div class="numberlist">
                                    2
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                                <div class="numberlist">
                                    3
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-block animated fadeInRight" data-id="2">
                            <div class="imgblock">
                                <img src="<?php echo e(asset('images/how-it-works.jpg')); ?>" alt="">
                                <a href="javascript:void(0);">Get a Free<br>Estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagejs'); ?>
<!-- additional JS -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>