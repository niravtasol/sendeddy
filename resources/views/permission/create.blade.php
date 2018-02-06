@extends('layouts.inner')
@section('content')
    <div class="page-heading-wrp">
        <h1>Create New Permission</h1>
        <div class="breadcrumb">
            <a href="{{url('')}}">{{trans('menu.dashboard')}}</a><img src="{{asset('img/arrow-right-1.png')}}" alt=""><a href="{{ route('permission.index') }}">Permission</a><img src="{{asset('img/arrow-right-1.png')}}" alt=""><span>Create New Permission</span>
        </div>
    </div>
    <div class="mainblock">
      <div class="innerblock">
         {!! Form::open(array('route' => 'permission.store','method'=>'POST')) !!}
            <div class="row">
               <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-md-2">
                      <label for="name">{{ trans('permission.name' )}}</label>
                    </div>
                    <div class="col-md-10">
                      <input class="form-control " placeholder="name" name="name" type="text" value="" id="name" required>
                    </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="display_name">{{ trans('permission.display_name')}}</label>
                  </div>
                  <div class="col-md-10">
                    <input class="form-control " placeholder="display_name" name="display_name" type="text" value="" id="display_name">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-md-2">
                    <label for="description">{{ trans('permission.description')}}</label>
                  </div>
                  <div class="col-md-10">
                    <textarea class="form-control " placeholder="description" name="description" cols="50" rows="5" id="description" spellcheck="true" ></textarea>
                  </div>
                </div>
              </div>
            </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <div class="col-md-2">
                          <label for="description">Module</label>
                      </div>
                      <div class="col-md-10">
                          <input type="text" class="form-control " placeholder="Module" name="module"  id="module" >
                      </div>
                  </div>
              </div>
          </div>
            <div class="row">
              <div class="col-md-12 text-right">
                {{Form::submit( __("framework.submit"),array('class' => 'btn btn-primary'))}}
                <a href="{{ route('permission.index') }}"><input type="button" class="btn btn-cancel" value="{{  __("framework.cancel") }}"></a>
              </div>
            </div>
          {!! Form::close() !!}
      </div>
    </div>
@endsection