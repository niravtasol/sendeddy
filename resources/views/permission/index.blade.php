@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        User Permissions
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')

        <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    @stop

{{-- This is the main content area --}}
    @section('content')

    <section class="content-header">
      <h1>
        User Permissions
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">All Permissions</li>
      </ol>
    </section>

 <section class="content">
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <p> <i class="fa fa-warning"></i> &nbsp;&nbsp; {{ Session::get('message') }} </p> 
        </div>
    @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title pull-left">All Permissions</h3>
              @permission('role-create')
              <a href="{{ url('/admin/addpermission') }}">
              <button type="button" class="btn btn-success pull-right"> Add Permissions </button>
              </a>
              @endpermission
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="permissiontable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th width="100px">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


    @stop

{{-- This is used for custom JS css at footer --}}
    @section('pagejs')

        <!-- <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script> -->
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script type="text/javascript">
          $(function () {
            $('#permissiontable').DataTable({
              processing    : true,
              serverSide    : true,
              ajax          : '{{ route('permissions.listAjax') }}',
              // "language"    : {"processing": "<img src='{{ asset('/images/loading.gif') }}' />"},
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              "columns": [
                {data: 'name', name: 'name'},
                {data: 'display_name', name: 'display_name'},
                {data: 'description', name: 'description'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
            });

            $(document).on('click', '.trash', function(e){
                var res = confirm('Are You Sure Want To Delete This?');
                if( !res ){
                    e.preventDefault();
                }
                else{
                }
            });

          });
        </script>
    @stop