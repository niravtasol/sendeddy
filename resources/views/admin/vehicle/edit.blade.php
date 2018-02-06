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

                <a class="btn btn-primary" href="{{ url('admin/vehicle') }}"> Back</a>

            </div>

            </div>
    
<div class="box-body">

    <form method="post" action="{{ url('/admin/update') }}">
    {{ csrf_field() }}

    <div class="row">
      <input name="id" type="hidden" value="{{ $id }}">


       <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="driver_id">Driver_Id</label>
              <input type="text" class="form-control" name="driver_id" value="{{ $vehicle->id}}" placeholder="Driver_Id" required>
        </div>



       <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" value="{{ $vehicle->type}}" placeholder="Type" required>
        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="make">Make</label>
              <input type="text" class="form-control" name="make" value="{{ $vehicle->make}}" placeholder="Make" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="model">Model</label>
              <input type="text" class="form-control" name="model" value="{{ $vehicle->model}}" placeholder="Model" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="year">Year</label>
              <input type="text" class="form-control" name="year" value="{{ $vehicle->year}}" placeholder="Year" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="color">Color</label>
              <input type="text" class="form-control" name="color" value="{{ $vehicle->color}}" placeholder="Color" required>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="status">Status</label>
               <select name="status" class="form-control" id="status">
                <option @if( $vehicle->status == 0 ) selected @endif value="0">0</option>
                <option @if( $vehicle->status == 1 ) selected @endif value="1">1</option>

              </select>
                 

                 
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
              <label for="reg_no">Reg_no</label>
              <input type="text" class="form-control" name="reg_no" value="{{ $vehicle->reg_no}}" placeholder="Reg_no" required>
        </div>
        
{{ csrf_field() }}
        

     <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <br>
             <!-- <a class="btn btn-primary" href="{{ route('store') }}"> Submit</a> -->
             <button type="submit" class="btn btn-primary"> Save </button>

         <!--     <a href="{{ URL::route('store') }}" class="btn btn-default"> Submit</a>
 -->
    </div>

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