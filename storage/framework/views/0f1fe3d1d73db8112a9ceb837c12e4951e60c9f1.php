    <?php $__env->startSection('title'); ?>
        Create New Role
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Add Role
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Role</li>
      </ol>       
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Role</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="<?php echo e(url('/admin/roles')); ?>"> Back</a>
                        </div>

                    </div>
                    <div class="box-body">
                        <form method="post" action="<?php echo e(url('/admin/role/create')); ?>">
                            <?php echo e(csrf_field()); ?>

                           
                            <div class="col-xs-12 col-sm-12 col-md-12 <?php echo e($errors->has('name') ? ' has-error' : ''); ?> form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" onkeypress="this.value = this.value.toLowerCase();"  placeholder="Role Name" required>
                                 <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                   <?php endif; ?>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 <?php echo e($errors->has('display_name') ? ' has-error' : ''); ?> form-group">
                                <label for="display_name">Display Name</label>
                                <input type="text" class="form-control" name="display_name" placeholder="Role Name" required>
                                 <?php if($errors->has('display_name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('display_name')); ?></strong>
                                        </span>
                                   <?php endif; ?>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-right form-group">
                                <button type="submit" class="btn btn-primary"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagejs'); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>