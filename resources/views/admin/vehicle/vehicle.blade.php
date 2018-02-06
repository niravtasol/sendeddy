@extends('admin.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Dashboard
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')

    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    @stop

{{-- This is the main content area --}}
    @section('content')

    <section class="content-header">
      <h1>
      Vehicle
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vehicle</li>
      </ol>
    </section>

        <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2></h2>

            </div>

           

        </div>

    </div>


    <section class="content">
       
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Vehicles</h3>
              <div class="pull-right">

                <a class="btn btn-success" href="{{ route('create') }}"> Add Vehicle </a>

            </div>
            </div>

            <!-- /.box-header -->


            <div class="box-body">
              <table id="vehicles" class="table table-bordered table-hover">
                <thead>
                <tr>

                <!--   <th>No</th> -->
                 <!--  <th>driver_id</th> -->
                  
                  <th>Type</th>
                  <th>Make</th>
                  <th>Model</th>
                  <th>Year</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vehicles as $vehicle)
                  <tr>
                 <!--     <td>{{++$i}}</td> -->
                 
                      <td>{{ $vehicle->type}}</td>

                      <td>{{ $vehicle->make}}</td>

                      <td>{{ $vehicle->model}}</td>

                      <td>{{ $vehicle->year}}</td>

              <!--         <td>{{ $vehicle->color}}</td>

                      <td>{{ $vehicle->reg_no}}</td>

                      <td>{{ $vehicle->status}}</td> -->

                         <td class="text-center action"> 
                            {{ $vehicle->action }}
                      </td>

                        
                       
                    </tr>
              @endforeach
                  
                </tbody>
              
              </table>
            </div>
          
          </div>
      

   </div>
          </div>
     </section>


    @stop

{{-- This is used for custom JS css at footer --}}
  @section('pagejs')
<!-- <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script>
      $(function () {
        $('#vehicles').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '{{ url('admin/getuservehicle') }}',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
          
                {data: 'type', name: 'type'},
                {data: 'make', name: 'make'},
                {data: 'model', name: 'model'},
                {data: 'year', name: 'year'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
           ]
      });

    $(document).on('click', '.action .trash', function(e)
            {
                var res = confirm('Are You Sure Want To Delete This?');
                console.log(res);
                if( !res )
                {
                    e.preventDefault();
                }
                else
                {
                }
            });

  });
    </script>
    @stop