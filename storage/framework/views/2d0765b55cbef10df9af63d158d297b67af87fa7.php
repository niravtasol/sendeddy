    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        User List
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">All Users</li>
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
              <h3 class="box-title pull-left">All Users</h3>
              <a href="<?php echo e(url('/admin/adduser')); ?>">
              <button type="button" class="btn btn-success pull-right"> Add User </button>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usertable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email ID</th>
                      <th>Mobile No.</th>
                      <th width="100px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td> <?php echo e($user->name); ?> <?php echo e($user->lastname); ?> </td>
                      <td> <?php echo e($user->email); ?> </td>
                      <td> <?php echo e($user->phone); ?> </td>
                      <td class="text-center action"> 
                            <?php echo e($user->action); ?>

                      </td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email ID</th>
                      <th>Mobile No.</th>
                      <th>Actions</th>
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
              ajax          : '<?php echo e(route('admin/users/getuser')); ?>',
              // "language"    : {"processing": "<img src='<?php echo e(asset('/images/loading.gif')); ?>' />"},
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              "columns": [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
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