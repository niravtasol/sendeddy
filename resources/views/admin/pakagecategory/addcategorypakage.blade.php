@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Dashboard
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    @stop

{{-- This is the main content area --}}
    @section('content')

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

                <a class="btn btn-primary" href="{{ url('/admin/pakagecategory') }}"> Back</a>

            </div>

            </div>


             <form role="form" method="POST" action="{{ url('/admin/storepakagecategory') }}">
             {{ csrf_field() }}

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


     


    @stop

{{-- This is used for custom JS css at footer --}}
    @section('pagejs')


   
    @stop



    <!--   <a class="btn btn-primary" href="{{ route('vehiclecategory') }}"> Back</a> -->
     <!--   <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('vehiclecategory') }}"> Back</a>

            </div>
 -->

   <!--  <form method="POST" action="{{ url('/store') }}">
    {{ csrf_field() }}

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