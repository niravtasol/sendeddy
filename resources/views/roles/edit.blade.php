@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Edit Role
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    @stop

{{-- This is the main content area --}}
    @section('content')

    <section class="content-header">
      <h1>
      Edit Role
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Role</li>
      </ol>       
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Role</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ url('/admin/role/edit') }}"> Back</a>
                        </div>

                    </div>
                    <div class="box-body">
                        <form method="post" action="{{ url('/admin/role/edit') }}">
                            {{ csrf_field() }}
                           
                            <div class="col-xs-12 col-sm-12 col-md-12 {{ $errors->has('name') ? ' has-error' : '' }} form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" readonly="readonly" name="name" placeholder="Role Name" value="{{ $role->name }}" required>
                                 @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                   @endif
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 {{ $errors->has('display_name') ? ' has-error' : '' }} form-group">
                                <label for="display_name">Display Name</label>
                                <input type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" placeholder="Role Name" required>
                                 @if ($errors->has('display_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </span>
                                   @endif
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control">{{ $role->description }}</textarea>
                            </div>

                            <input type="hidden" name="id" value="{{ $role->id }}">
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