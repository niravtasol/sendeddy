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

                <a class="btn btn-primary" href="{{ route('vehicle') }}"> Back</a>

            </div>

            </div>
<div class="box-body">



    <form role="form" method="post" action="{{ url('/admin/add') }}">
    {{ csrf_field() }}

   <!--  <div class="row"> -->


       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="driver_id">Driver_Id</label>
              <input type="text" class="form-control" name="driver_id" placeholder="Driver_Id" required>
        </div>



       <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" placeholder="Type" required>
        </div>


         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="make">Make</label>
              <input type="text" class="form-control" name="make" placeholder="Make" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="model">Model</label>
              <input type="text" class="form-control" name="model" placeholder="Model" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="year">Year</label>
              <input type="text" class="form-control" name="year" placeholder="Year" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="color">Color</label>
              <input type="text" class="form-control" name="color" placeholder="Color" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="status">Status</label>
               <select name="status" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
              </select>
                 
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="reg_no">Reg_no</label>
              <input type="text" class="form-control" name="reg_no" placeholder="Reg_no" required>
        </div>

        

     <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            
            <br>
             <button type="submit" class="btn btn-primary"> Submit</button>

     
    </div>

<!-- </div>
 -->        
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














    <!--  <section class="content">
      <div class="row">
       
        <div class="col-md-12">
       
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vehicle</h3>
               <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('vehicle') }}"> Back</a>

            </div>
            </div>


             <form role="form"  method="post" action="{{ url('/add') }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="driver_id">Driver_Id</label>
              <input type="text" class="form-control" name="driver_id" placeholder="Driver_Id" required>
                </div>
                <div class="form-group">
                 <label for="type">Type</label>
              <input type="text" class="form-control" name="type" placeholder="Type" required>
                </div>

                <div class="form-group">
                 <label for="make">Make</label>
              <input type="text" class="form-control" name="make" placeholder="Make" required>

                </div>

                <div class="form-group">
                 <label for="model">Model</label>
              <input type="text" class="form-control" name="model" placeholder="Model" required>

                </div>


                <div class="form-group">
                <label for="year">Year</label>
              <input type="text" class="form-control" name="year" placeholder="Year" required>

                </div>


                <div class="form-group">
                  <label for="color">Color</label>
              <input type="text" class="form-control" name="color" placeholder="Color" required>

              </div>

  
                <div class="form-group">
                <label for="status">Status</label>
               <select name="status" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
              </select>

                  </div>

  
                <div class="form-group">
                 <label for="reg_no">Reg_no</label>
              <input type="text" class="form-control" name="reg_no" placeholder="Reg_no" required>

                </div>
               
              </div>
          
              <div class="box-footer text-center" >
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

              
          </div>
         </div>
           </div>
      
 </section>
 -->