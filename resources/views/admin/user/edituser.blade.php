@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Add User
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    @stop

{{-- This is the main content area --}}
    @section('content')

    <section class="content-header">
      <h1>
      Add User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit User</li>
      </ol>       
    </section>
	<section class="content">
		<div class="row">
	        <!-- left column -->
	        <div class="col-md-12">
		        <!-- general form elements -->
		        <div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">Edit User</h3>
			            <div class="pull-right">
			                <a class="btn btn-primary" href="{{ url('/admin/users') }}"> Back</a>
			            </div>

		            </div>
					<div class="box-body">
					    <form method="post" action="{{ url('/admin/user/edit') }}">
					    	{{ csrf_field() }}
					       
					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					            <label for="driver_id">Name</label>
					            <input type="text" class="form-control" name="name" placeholder="First Name" value="{{ $user->name }}" required>
					        </div>
					        
					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					            <label for="type">Last Name</label>
					            <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ $user->lastname }}" required>
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">Email</label>
					              <input type="email" readonly class="form-control" name="email" placeholder="EmailID" value="{{ $user->email }}" required>
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">Alternative Email</label>
					              <input type="email" class="form-control" name="alt_email" placeholder="Alternative EmailID" value="{{ $user->alternative_email }}">
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">Phone</label>
					              <input type="number" class="form-control" name="phone" placeholder="Phone No." value="{{ $user->phone }}" required>
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">Address</label>
					              <textarea class="form-control" rows="3" name="address" placeholder="Please Enter Your Address." >{{ $user->address }}</textarea>
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">Country</label>
					              <input type="text" class="form-control" name="country" placeholder="Country" value="{{ $user->country }}">
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">State</label>
					              <input type="text" class="form-control" name="state" placeholder="State" value="{{ $user->state }}">
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					              <label for="type">City</label>
					              <input type="text" class="form-control" name="city" placeholder="city" value="{{ $user->city }}">
					        </div>

					        <input type="hidden" name='id' value="{{ $user->id }}">
						    <div class="col-xs-12 col-sm-12 col-md-12 text-right form-group">
								<button type="submit" class="btn btn-primary"> Edit</button>
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