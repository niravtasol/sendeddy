    <?php $__env->startSection('title'); ?>
        Dashboard
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
      Pakage Type
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
              <h3 class="box-title">Pakage Type</h3>
                 <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(url('/admin/pakagetype')); ?>"> Back</a>

            </div>

            </div>


             <form role="form" method="POST" action="<?php echo e(url('/admin/storepakagetype')); ?>">
             <?php echo e(csrf_field()); ?>


              <div class="box-body">
                <div class="form-group">
                   <label for="typename">Name:</label>
              <input type="text" class="form-control" name="typename" placeholder="Name" required>
                </div>

                  <div class="form-group">
                  <label for="category">Category</label>
               <select name="category" class="form-control">
                <option value="">-Select Category-</option>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($cat->name); ?>"><?php echo e($cat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
                </div>

                 <div class="form-group">
                   <label for="description">Description:</label>
               <textarea class="form-control" rows="3" name="description" placeholder="Description."></textarea required>
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