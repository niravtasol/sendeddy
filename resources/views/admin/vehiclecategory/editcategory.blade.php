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
      Vehicle
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vehicle</li>
      </ol>

       
    </section>



     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vehicle Category</h3>
                 <div class="pull-right">

                 <a class="btn btn-primary" href="{{ url('/admin/vehiclecategory') }}"> Back</a>

            </div>

            </div>


             <form role="form" method="post" action="{{ url('/admin/updatecategory') }}">
             {{ csrf_field() }}

              <div class="box-body">
                <div class="form-group">

                   <label for="vehiclecategory">VehicleCategory:</label>
              <input type="text" class="form-control" name="vehiclecategory" value="{{ $vehiclecategory->vehiclecategory}}" placeholder="Vehiclecategory" >

                    
                </div>
                <input name="id" type="hidden" value="{{ $id }}">

                
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


 
     
      <!--  <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('vehiclecategory',$vehiclecategory->id) }}"> Back</a>

            </div>


    <form method="post" action="{{ url('/updatecategory') }}">
    {{ csrf_field() }}

    <div class="row">

 
       <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="vehiclecategory">VehicleCategory</label>
              <input type="text" class="form-control" name="vehiclecategory" value="{{ $vehiclecategory->vehiclecategory}}" placeholder="Vehiclecategory" required>
        </div>

<input name="id" type="hidden" value="{{ $id }}">



      
        

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            
         
             <button type="submit" class="btn btn-primary"> Submit</button>

      
    </div>

</div>
        
</form>
     -->

