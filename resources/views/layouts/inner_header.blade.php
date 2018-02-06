<header>
    <div class="container">
        <div class="row">
            <div class="inner-head-wrp">
                <div class="col-lg-3 col-sm-2 text-left sgp-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/sgp-logo-inner.png') }}"></a>
                </div>
                <div class="col-lg-4 col-sm-3 text-center glob-logo">

                </div>
                <div class="col-lg-5 col-sm-7 head-right-wrp">
                    <div class="pull-right">
                        <div class="head-right">
                            <div class="profile-pic">
                                <div class="pro-box">
                                    @if(\Auth::User()->avatar != '')
                                        <img src="{{ url(\Auth::User()->avatar) }}" alt="">
                                    @else
                                        <img src="{{ url('img/default-user-avtar.jpg') }}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="user-wrp navbar-right">
                                <a href="{{ url('profile') }}" class="dropdown-toggle" data-toggle="dropdown">{{ \Auth::User()->username }} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('profile') }}">{{__('users.profile')}}</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="{{ url('logout') }}">{{__('users.logout')}}</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts/navbar')
</header>
@if(Session::has('alerts'))
    @foreach (Session::get('alerts') as $alert)
        <div class="alert alert-{{ $alert['type'] }} alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="message">
                {{ $alert['message'] }}
            </div>
        </div>
    @endforeach
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success alert-hideable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
    </div>
@endif
@if(Session::has('delete_message'))
    <div class="alert alert-danger alert-hideable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('delete_message') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
