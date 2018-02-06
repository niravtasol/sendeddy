@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Edit Permission
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    @stop

{{-- This is the main content area --}}
    @section('content')

    <section class="content-header">
      <h1>
      Edit Permission
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Permission</li>
      </ol>       
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Permission</h3>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ url('/admin/permissions') }}"> Back</a>
                        </div>

                    </div>
                    <div class="box-body">
                        <form method="post" action="{{ url('/admin/permission/edit') }}">
                            {{ csrf_field() }}
                           
                            <div class="col-xs-12 col-sm-12 col-md-12 {{ $errors->has('name') ? ' has-error' : '' }} form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Permission Name" required value="{{ $permission->name }}">
                                 @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                   @endif
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 {{ $errors->has('display_name') ? ' has-error' : '' }} form-group">
                                <label for="display_name">Display Name</label>
                                <input type="text" class="form-control" name="display_name" placeholder="Permission Name" required value="{{ $permission->display_name }}">
                                 @if ($errors->has('display_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </span>
                                   @endif
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control">{{ $permission->description }}</textarea>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-right form-group">
                                <input type="hidden" name="id" id="id" value="{{ $permission->id }}">
                                <button type="submit" class="btn btn-primary"> Update</button>
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