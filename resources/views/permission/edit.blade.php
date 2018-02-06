@extends('layouts.inner')
@section('content')
    <div class="page-heading-wrp">
        <h1>Edit Permission</h1>
        <div class="breadcrumb">
            <a href="{{url('')}}">{{trans('menu.dashboard')}}</a><img src="{{asset('img/arrow-right-1.png')}}" alt=""><a href="{{ route('permission.index') }}">Permission</a><img src="{{asset('img/arrow-right-1.png')}}" alt=""><span>Edit Permission</span>
        </div>
    </div>
    <div class="mainblock">
      <div class="innerblock">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        {!! Form::model($permission, ['method' => 'PATCH','route' => ['permission.update', $permission->id]]) !!}
        <div class="row">
          <div class="col-md-12">
            @foreach($permission['attributes'] as $key=>$eachitem)
            @php
            if($key=="id")
            {
            $type="hidden";
            $display="none";
            }
            else if($key == "name" || $key == "display_name")
            {
            $type="text";
            $display="block";
            }
            else if($key == "description")
            {
            $type="textarea";
            $display="block";
            }
            else if($key == "created_at" || $key == "updated_at")
            {
            $type="date";
            $display="none";
            }
            else{
            $type="text";
            $display="block";
            }
            @endphp
            <div class="form-group row" style="display:{{$display}}">
              <div class="col-md-2">
                {{Form::label($key, __("permission.".$key) )}}
              </div>
              <div class="col-md-10">
                {{Form::$type($key,$eachitem,array('class' => 'form-control ', 'placeholder'=>$key))}}
              </div>
            </div>
          @endforeach
        </div>
        <div class="col-md-12 text-right">
          {{Form::submit( __("framework.submit"),array('class' => 'btn btn-primary'))}}
          <a href="{{ route('permission.index') }}"><input type="button" class="btn btn-cancel" value="{{  __("framework.cancel") }}"></a>
        </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection