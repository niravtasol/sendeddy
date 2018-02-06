    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Pakage Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pakage</li>
      </ol>

       
    </section>



     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pakage Category</h3>
                 <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(url('/admin/pakagecategory')); ?>"> Back</a>

            </div>

            </div>


             <form role="form" method="POST" action="<?php echo e(url('/admin/storepakagecategory')); ?>">
             <?php echo e(csrf_field()); ?>


              <div class="box-body">
                <div class="form-group">
                   <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>

                 <div class="form-group">
                   <label for="description">Description:</label>
               <textarea class="form-control" rows="3" name="description" placeholder="Description."></textarea required>
                </div>

                  <div class="form-group">
                   <label for="ordring">Order:</label>
              <input type="number" class="form-control" name="ordring" placeholder="Order" required>
                </div>

               <!--  <div class="form-group">
                   <label for="parent_id">Prarent_id:</label>
              <input type="number" class="form-control" name="parent_id" placeholder="Order" required>
                </div> -->
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-right form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
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



    <!--   <a class="btn btn-primary" href="<?php echo e(route('vehiclecategory')); ?>"> Back</a> -->
     <!--   <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('vehiclecategory')); ?>"> Back</a>

            </div>
 -->

   <!--  <form method="POST" action="<?php echo e(url('/store')); ?>">
    <?php echo e(csrf_field()); ?>


    <div class="row">
   
  
       <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="vehiclecategory">VehicleCategory:</label>
              <input type="text" class="form-control" name="vehiclecategory" placeholder="Vehiclecategory" required>
        </div>




     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            
         
             <button type="submit" class="btn btn-primary"> Submit</button>

      
    </div>

</div>
        
</form>
    
 -->
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>