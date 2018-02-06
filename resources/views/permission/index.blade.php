@extends('layouts.inner')
@section('content')
    <div class="page-heading-wrp">
        <h1>{{trans('permission.permission_management')}}</h1>
        <div class="breadcrumb">
            <a href="{{url('')}}">{{trans('menu.dashboard')}}</a><img src="{{asset('img/arrow-right-1.png')}}" alt=""><span>{{trans('permission.permission_management')}}</span>
        </div>
    </div>

    <div class="mainblock">
        @permission('permission-create')
        <div class="buttons_wrp">
            <a class="btn-blue" href="{{ route('permission.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>Create New Permission</a>
            <!-- <a href="#" class="btn-normal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit </a>
            <a href="#" class="btn-normal"><i class="fa fa-times" aria-hidden="true"></i>Delete </a>
            <a href="#" class="btn-normal"><i class="fa fa-external-link" aria-hidden="true"></i>{{ __('framework.export') }}</a>
           <a href="#" class="btn-normal"><i class="fa fa-print" aria-hidden="true"></i>{{ __('framework.print') }}</a>
            <a href="#" class="btn-normal"><i class="fa fa-question" aria-hidden="true"></i>Help</a> -->
        </div>
        @endpermission
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
               id="menuTable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Display Name</th>
                <th>Description</th>
                <th>Module</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($permissions as $key => $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->display_name }}</td>
                    <td>{{ $permission->description }}</td>
                    <td>{{ $permission->module }}</td>

                    <td>

                        @permission('permission-edit')
                        <a class="btn btn-blue-small" href="{{ route('permission.edit',$permission->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        @endpermission
                        @permission('permission-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['permission.destroy', $permission->id],'style'=>'display:inline']) !!}
                            <button type="submit" class="btn btn-red-small"><i class="fa fa-trash"></i> {!!__('contacts_listing.delete') !!} </button>
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@section('script')
    <script src="{{ asset('/vendor/datatables/input.customized.js') }}"></script>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            var CmsPageIDs = [];
            $('#menuTable').DataTable({
                pagingType: "input",
                select: true,
                stateSave: true,
                "aoColumnDefs": [
                    {"bSortable": false, "aTargets": [2]},
                ],
            });

           // Handle click on "Select all" control
            jQuery(document).on('click','th input[name="select_all"]', function (e) {
                if (this.checked) {
                    jQuery('#menuTable tbody input[type="checkbox"]:not(:checked)').trigger('click');
                    var allPageIDs = [];
                    jQuery('.select_one').each(function (index, el) {
                        allPageIDs.push(jQuery(this).val());
                    });
                    jQuery('#menuvalue').val(allPageIDs);
                } else {
                    jQuery('#menuTable tbody input[type="checkbox"]:checked').trigger('click');
                    jQuery('#menuvalue').val("");
                }
                // Prevent click event from propagating to parent
                e.stopPropagation();
            });

            jQuery(document).on('click','.select_one', function (e) {
                if (this.checked) {
                    var pageID = jQuery(this).val();
                    CmsPageIDs.push(pageID);
                    jQuery('#menuvalue').val(CmsPageIDs);
                } else {
                    var pageID = jQuery(this).val();
                    var removeIndex = jQuery.inArray(pageID, CmsPageIDs);
                    CmsPageIDs.splice(removeIndex, 1);
                    jQuery('#menuvalue').val(CmsPageIDs);
                }
                // Prevent click event from propagating to parent
                e.stopPropagation();
            });
        });
    </script>
@endsection
@endsection
