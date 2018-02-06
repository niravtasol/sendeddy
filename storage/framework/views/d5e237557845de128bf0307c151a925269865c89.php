    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
       <link rel="stylesheet" href="<?php echo e(asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Pakage Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

     
     <section class="content">

           
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <div class="pull-right">

                <a class="btn btn-success" href="<?php echo e(url('/admin/addpakagecategory')); ?>"> Add Category </a>

              </div>
            <h3 class="box-title">Pakage Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="pakagecategory" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
             
                <?php $__currentLoopData = $pakagecategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pakagecategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                    
<!--                      <td><?php echo e(++$i); ?></td>
 -->                  <td><?php echo e($pakagecategory->id); ?></td>
                      <td><?php echo e($pakagecategory->name); ?></td>
                      <td><?php echo e($pakagecategory->description); ?></td> 
                      <td class="text-center action"> 
                          <?php echo e($pakagecategory->action); ?>

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
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo e(asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
      $(function () {
        $('#pakagecategory').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '<?php echo e(url('admin/getpakage')); ?>',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
                {data: 'id', name: 'id', searchable: false},
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
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