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
      Vehicle Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

     <div class="row">
<!-- 
        <div class="col-lg-12 margin-tb">
          
           <a class="btn btn-success" href="{{ url('/admin/createcategory') }}"> Add Category </a>

       
        </div> -->

    </div>


    <section class="content">

           
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <div class="pull-right">

                <a class="btn btn-success" href="{{ url('/admin/createcategory') }}"> Add Category </a>

            </div>
              <h3 class="box-title">Vehicle Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="vehiclecategory" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>No</th>
                  <th>VehicleCategory</th>
                   
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
             
                @foreach($vehiclecategorys as $vehiclecategory)

                  <tr>
                    
                     <td>{{++$i}}</td>
                      <td>{{ $vehiclecategory->vehiclecategory}}</td>    
                      
                         <td class="text-center action"> 
                            {{$vehiclecategory->action}}
                      </td>

<!-- 
                            <td class="text-center action"> 
                        <a href="{{ url('/admin/editcategory',$vehiclecategory->id) }}" class="edit">
                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="{{ url('/admin/destroycategory',$vehiclecategory->id) }}" class="trash">
                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>
                      </td> -->
                       
                    </tr>
              @endforeach
                  

                 <!--    </tr>
            -->
                  
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
      <!-- <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script> -->
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
      $(function () {
        $('#vehiclecategory').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '{{ url('admin/getuser') }}',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
                {data: 'id', name: 'id', searchable: false},
              {data: 'vehiclecategory', name: 'vehiclecategory'},
              {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
      });
    </script>
    @stop