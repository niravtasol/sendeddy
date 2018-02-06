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

                 <a class="btn btn-primary" href="{{ url('/admin/pakagetype') }}"> Back</a>

            </div>

            </div>


             <form role="form" method="post" action="{{ url('/admin/updatepakagetype') }}">
             {{ csrf_field() }}

              <div class="box-body">
                <div class="form-group">
                   <label for="typename">Name:</label>
              <input type="text" class="form-control" name="typename" value="{{ $pakagetype->typename }}" placeholder="Name" required>
                </div>

                <div class="form-group">
                  <label for="category">Category</label>
                    <select name="category" class="form-control">
                <option value="">-Select Category-</option>
             

                 @foreach ($category as $name=>$cat)
        <option value="{{ $cat->name }}"{{ ( $cat->state_id == $name ) ? 'selected' : '' }}>{{ $cat->name }}</option>
    @endforeach
              
             
                </div>

              </select>

               
                
                 <div class="form-group">
                   <label for="description">Description:</label>
               <textarea class="form-control" rows="3" name="description"  placeholder="Description.">{{ $pakagetype->description }}</textarea required>
                </div>


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