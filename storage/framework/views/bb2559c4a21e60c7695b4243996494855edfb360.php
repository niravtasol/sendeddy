    <?php $__env->startSection('title'); ?>
        User Roles
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        User Roles
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">All Roles</li>
      </ol>
    </section>

 <section class="content">
    <?php if(Session::has('message')): ?>
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <p> <i class="fa fa-warning"></i> &nbsp;&nbsp; <?php echo e(Session::get('message')); ?> </p> 
        </div>
    <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title pull-left">All Roles</h3>
              <?php if (\Entrust::can('role-create')) : ?>
              <a href="<?php echo e(url('/admin/addrole')); ?>">
              <button type="button" class="btn btn-success pull-right"> Add Role </button>
              </a>
              <?php endif; // Entrust::can ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usertable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td> <?php echo e($role->name); ?> </td>
                      <td> <?php echo e($role->description); ?> </td>
                      <td> <?php echo e($role->created_at); ?> </td>
                      <td> <?php echo e($role->updated_at); ?> </td>
                      <td class="text-center action"> 
                            <?php echo e($role->action); ?>

                      </td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagejs'); ?>

        <!-- <script src="<?php echo e(asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script> -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script src="<?php echo e(asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
        <script type="text/javascript">
          $(function () {
            $('#usertable').DataTable({
              processing    : true,
              serverSide    : true,
              ajax          : '<?php echo e(route('roles.listAjax')); ?>',
              // "language"    : {"processing": "<img src='<?php echo e(asset('/images/loading.gif')); ?>' />"},
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              "columns": [
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
            });

            $(document).on('click', '.trash', function(e){
                var res = confirm('Are You Sure Want To Delete This?');
                if( !res ){
                    e.preventDefault();
                }
                else{
                }
            });

          });
        </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>