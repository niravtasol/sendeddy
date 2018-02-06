    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
       <link rel="stylesheet" href="<?php echo e(asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Vehicle Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

     <div class="row">
<!-- 
        <div class="col-lg-12 margin-tb">
          
           <a class="btn btn-success" href="<?php echo e(url('/admin/createcategory')); ?>"> Add Category </a>

       
        </div> -->

    </div>


    <section class="content">

           
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <div class="pull-right">

                <a class="btn btn-success" href="<?php echo e(url('/admin/createcategory')); ?>"> Add Category </a>

            </div>
              <h3 class="box-title">Vehicle Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="vehiclecategory" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>No</th>
                  <th>VehicleCategory</th>
                   
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
             
                <?php $__currentLoopData = $vehiclecategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiclecategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                    
                     <td><?php echo e(++$i); ?></td>
                      <td><?php echo e($vehiclecategory->vehiclecategory); ?></td>    
                      
                         <td class="text-center action"> 
                            <?php echo e($vehiclecategory->action); ?>

                      </td>

<!-- 
                            <td class="text-center action"> 
                        <a href="<?php echo e(url('/admin/editcategory',$vehiclecategory->id)); ?>" class="edit">
                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="<?php echo e(url('/admin/destroycategory',$vehiclecategory->id)); ?>" class="trash">
                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>
                      </td> -->
                       
                    </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  

                 <!--    </tr>
            -->
                  
                </tbody>
              
              </table>
            </div>
          
          </div>
      

   </div>
          </div>
     </section>



    


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagejs'); ?>
      <!-- <script src="<?php echo e(asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script> -->
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo e(asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
      $(function () {
        $('#vehiclecategory').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '<?php echo e(url('admin/getuser')); ?>',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
                {data: 'id', name: 'id', searchable: false},
              {data: 'vehiclecategory', name: 'vehiclecategory'},
              {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
      });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>