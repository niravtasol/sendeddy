<div class="navigation-menu">
    <div class="container">
        <div class="row">
            <div class="navbar menubar">
                <ul class="slimmenu">
                    <li {{ Request::segment(1) == '' ? 'class=active' : '' }}><a href="{{ url('/') }}">{{trans('menu.dashboard')}}</a>

                    </li>
                    @php
                        $active = (Request::segment(1) == 'languagemanager' || Request::segment(1) == 'region' || Request::segment(1) == 'country' || Request::segment(1) == 'tags_and_taxonomy' || Request::segment(1) == 'taxonomy' || Request::segment(1) == 'tag') ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a href="javascript:void(0);"  role="button" aria-haspopup="false" aria-expanded="false">{{trans('menu.configuration')}} <span class="caret"></span></a>
                        <ul>
                          {{--<li><a href="{{ route('languagemanager.index') }}">{{trans('menu.languagemanager')}}</a></li>--}}
                            @php
                                $active = (Request::segment(1) == 'region') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}"><a href="{{ route('region.index') }}">{{trans('menu.region_manager')}}</a></li>
                            @php
                                $active = (Request::segment(1) == 'country') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}"><a href="{{ route('country.index') }}">{{trans('menu.country_manager')}}</a></li>
                            @php
                                $active = (Request::segment(1) == 'tags_and_taxonomy' || Request::segment(1) == 'taxonomy' || Request::segment(1) == 'tag') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}"><a href="javascript:void(0);">{{trans('menu.tags_and_taxonomy')}}</a>
                                <ul>
                                    @php
                                        $active = (Request::segment(1) == 'taxonomy') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{ route('taxonomy.index') }}">{{trans('menu.taxonomies')}}</a></li>
                                    @php
                                        $active = (Request::segment(1) == 'tag') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{ route('tag.index') }}">{{trans('menu.tags')}}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    @php
                        $active = (Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'permission') ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">{{trans('menu.users')}} <span class="caret"></span></a>
                        <ul>
                            @php
                                $active = (Request::segment(1) == 'users') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}"><a href="{{ route('users.index') }}">{{trans('menu.manageusers')}}</a></li>
                            @php
                                $active = (Request::segment(1) == 'roles') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}"><a href="{{ route('roles.index') }}">{{trans('menu.manageuserstype')}}</a></li>
                            @php
                                $active = (Request::segment(1) == 'permission') ? 'active' : '';
                            @endphp
                           {{-- <li class="{{ $active }}"><a href="{{ route('permission.index') }}">{{trans('menu.permission')}}</a></li>--}}
                        </ul>
                    </li>
                    @php
                        $active = ( Request::segment(2) == 'create' || Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory' || Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}"><a href="#" role="button" aria-haspopup="false" aria-expanded="false">{{trans('menu.intranet')}}<span class="caret"></span></a>
                        <ul>
                            @php
                                $active = (Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory' || Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">{{trans('menu.gallery')}} </a>

                                <ul>
                                    @php
                                        $active = (Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}">
                                        <a href="{{ route('photoalbum.categories') }}">{{trans('menu.photo_gallery')}}</a>
                                        <ul>
                                            @php
                                                $active = (Request::segment(1) == 'photoalbum' && Request::segment(2) == '') ? 'active' : '';
                                            @endphp
                                            <li class="{{ $active }}"><a href="{{ route('photoalbum.index') }}">{{trans('menu.albums_list')}}</a></li>
                                            @php
                                                $active = (Request::segment(1) == 'photocategory') ? 'active' : '';
                                            @endphp
                                            <li class="{{ $active }}"><a href="{{ route('photocategory.index') }}">{{trans('menu.photo_category_list')}}</a></li>
                                        </ul>
                                    </li>

                                    @php
                                        $active = (Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}">
                                        <a  href="{{ route('videoalbum.categories') }}">{{trans('menu.video_gallery')}}</a>
                                        <ul>
                                            @php
                                                $active = (Request::segment(1) == 'videoalbum' && Request::segment(2) == '') ? 'active' : '';
                                            @endphp
                                            <li class="{{ $active }}"><a href="{{ route('videoalbum.index') }}">{{trans('menu.video_list')}}</a></li>
                                            @php
                                                $active = (Request::segment(1) == 'videocategory') ? 'active' : '';
                                            @endphp
                                            <li class="{{ $active }}"><a href="{{ route('videocategory.index') }}">{{trans('menu.video_category_list')}}</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{--<li>--}}
                        {{--<a href="#">{{trans('menu.projects')}}</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{route('focalarea.index')}}">{{trans('menu.focalarea')}}</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    @php
                        $active = (Request::segment(1) == 'contacts' || Request::segment(1) == 'company' || Request::segment(1) == 'contact') ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a href="{{ route('contacts.index') }}" role="button" aria-haspopup="false" aria-expanded="false">{{trans('menu.contacts')}} <span class="caret"></span></a>
                        <ul>
                            @php
                                $active = (Request::segment(2) == 'grantees' || Request::segment(2) == 'ngos' || Request::segment(2) == 'cbos' || Request::segment(2) == 'others' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'grantee')) ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}">
                                <a href="{{route('company.grantees')}}">{{trans('menu.grantees')}}</a>
                                <ul>
                                    @php
                                        $active = (Request::segment(2) == 'ngos') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.ngos')}}">{{trans('menu.ngos')}}</a></li>
                                    @php
                                        $active = (Request::segment(2) == 'cbos') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.cbos')}}">{{trans('menu.cbos')}}</a></li>
                                    @php
                                        $active = (Request::segment(2) == 'others') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.others')}}">{{trans('menu.others')}}</a></li>
                                    @php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'grantee') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.create',array('type'=>'grantee'))}}">{{trans('menu.addnewgrantee')}}</a></li>
                                </ul>
                            </li>
                            @php
                                $active = (Request::segment(2) == 'vendors' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'vendor')) ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}">
                                <a href="{{route('company.vendors')}}">{{trans('menu.vendors')}}</a>
                                <ul>
                                    @php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'vendor') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.create',array('type'=>'vendor'))}}">{{trans('menu.addnewvendors')}}</a></li>
                                </ul>
                            </li>
                            @php
                                $active = (Request::segment(2) == 'sgps' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'sgp')) ? 'active' : '';
                            @endphp
                            <li class="{{ $active }}">
                                <a href="{{route('company.sgps')}}">{{trans('menu.sgps')}}</a>
                                <ul>
                                    @php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'sgp') ? 'active' : '';
                                    @endphp
                                    <li class="{{ $active }}"><a href="{{route('company.create',array('type'=>'sgp'))}}">{{trans('menu.addnewsgp')}}</a></li>
                                </ul>
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{route('contacts.nscmembers')}}">{{trans('menu.nscmembers')}}</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="{{route('contacts.active_nscmembers')}}">{{trans('menu.activenscmembers')}}</a></li>--}}
                                    {{--<li><a href="{{route('contacts.archived_nscmembers')}}">{{trans('menu.archivednscmembers')}}</a></li>--}}
                                    {{--<li><a href="{{route('contacts.create')}}">{{trans('menu.addnewnscmembers')}}</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}

                        </ul>
                    </li>
                    {{--<li><a href="#">{{trans('menu.reports')}}</a></li>--}}
                    {{--<li><a href="#">{{trans('menu.surveys')}}</a></li>--}}
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <a class="icon-search-mobile" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                    <div class="input-group dropdown-menu">
                        <input type="text" class="form-control" placeholder="{{trans('menu.search')}}" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
