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
        <li class="active">Add User</li>
      </ol>       
    </section>
	<section class="content">
		<div class="row">
	        <!-- left column -->
	        <div class="col-md-12">
		        <!-- general form elements -->
		        <div class="box box-primary">
		            <div class="box-header with-border">
		              	<h3 class="box-title">Add User</h3>
			            <div class="pull-right">
			                <a class="btn btn-primary" href="{{ url('/admin/users') }}"> Back</a>
			            </div>

		            </div>
					<div class="box-body">
					    <form method="post" action="{{ url('/admin/user/create') }}">
					    	{{ csrf_field() }}
					       
					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					            <label for="driver_id">Name</label>
					            <input type="text" class="form-control" name="name" placeholder="First Name" required>
					             @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                               @endif
					        </div>
					        
					        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
					            <label for="type">Last Name</label>
					            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
					             @if ($errors->has('lastname'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('lastname') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Email</label>
					              <input type="email" class="form-control" name="email" placeholder="EmailID" required>

					               @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Password</label>
					              <input type="password" class="form-control" name="password" placeholder="Password" required>

					              @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Alternative Email</label>
					              <input type="email" class="form-control" name="alt_email" placeholder="Alternative EmailID">
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Phone</label>
					              <input type="number" class="form-control" name="phone" placeholder="Phone No." required>
					               @if ($errors->has('phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('phone') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Address</label>
					              <textarea class="form-control" rows="3" name="address" placeholder="Please Enter Your Address."></textarea>
					                @if ($errors->has('address'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address') }}</strong>
	                                    </span>
	                               @endif

					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">Country</label>
					              <input type="text" class="form-control" name="country" placeholder="Country">
					                @if ($errors->has('country'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('country') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">State</label>
					              <input type="text" class="form-control" name="state" placeholder="State">
					                @if ($errors->has('state'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('state') }}</strong>
	                                    </span>
	                               @endif
					        </div>

					        <div class="col-xs-12 col-sm-12 col-md-12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					              <label for="type">City</label>
					              <input type="text" class="form-control" name="city" placeholder="city">
					                @if ($errors->has('city'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('city') }}</strong>
	                                    </span>
	                               @endif
					        </div>


						    <div class="col-xs-12 col-sm-12 col-md-12 text-right form-group">
								<button type="submit" class="btn btn-primary"> Save</button>
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