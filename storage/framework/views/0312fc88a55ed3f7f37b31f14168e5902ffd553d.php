    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Vehicle
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vehicle</li>
      </ol>
    </section>

        <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2></h2>

            </div>

           

        </div>

    </div>


    <section class="content">
       
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Vehicles</h3>
              <div class="pull-right">

                <a class="btn btn-success" href="<?php echo e(route('create')); ?>"> Add Vehicle </a>

            </div>
            </div>

            <!-- /.box-header -->


            <div class="box-body">
              <table id="vehicles" class="table table-bordered table-hover">
                <thead>
                <tr>

                <!--   <th>No</th> -->
                 <!--  <th>driver_id</th> -->
                  
                  <th>Type</th>
                  <th>Make</th>
                  <th>Model</th>
                  <th>Year</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                 <!--     <td><?php echo e(++$i); ?></td> -->
                 
                      <td><?php echo e($vehicle->type); ?></td>

                      <td><?php echo e($vehicle->make); ?></td>

                      <td><?php echo e($vehicle->model); ?></td>

                      <td><?php echo e($vehicle->year); ?></td>

              <!--         <td><?php echo e($vehicle->color); ?></td>

                      <td><?php echo e($vehicle->reg_no); ?></td>

                      <td><?php echo e($vehicle->status); ?></td> -->

                         <td class="text-center action"> 
                            <?php echo e($vehicle->action); ?>

                      </td>

                        
                       
                    </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>
              
              </table>
            </div>
          
          </div>
      

   </div>
          </div>
     </section>


    <?php $__env->stopSection(); ?>


  <?php $__env->startSection('pagejs'); ?>
<!-- <script src="<?php echo e(asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
 -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
  <script>
      $(function () {
        $('#vehicles').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '<?php echo e(url('admin/getuservehicle')); ?>',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
          
                {data: 'type', name: 'type'},
                {data: 'make', name: 'make'},
                {data: 'model', name: 'model'},
                {data: 'year', name: 'year'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
           ]
      });

    $(document).on('click', '.action .trash', function(e)
            {
                var res = confirm('Are You Sure Want To Delete This?');
                console.log(res);
                if( !res )
                {
                    e.preventDefault();
                }
                else
                {
                }
            });

  });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>