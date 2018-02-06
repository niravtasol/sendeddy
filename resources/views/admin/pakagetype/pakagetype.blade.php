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
      Pakage Category
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

      
      <section class="content">

           
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <div class="pull-right">

                <a class="btn btn-success" href="{{ url('/admin/addpakagetype') }}"> Add Type </a>

              </div>
            <h3 class="box-title">Pakage Type</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="pakagetypes" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>No</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
             
                @foreach($pakagetypes as $pakagetype)

                  <tr>
                    
<!--                   <td>{{++$i}}</td>
 -->                  <td>{{ $pakagetype->id}}</td>
                      <td>{{ $pakagetype->typename}}</td>
                      <td>{{ $pakagetype->category}}</td>
                      <td>{{ $pakagetype->description}}</td> 
                      <td class="text-center action"> 
                          {{$pakagetype->action}}
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
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
      $(function () {
        $('#pakagetypes').DataTable(
        {
           processing    : true,
           serverSide    : true,
           ajax          : '{{ url('admin/getpakagetype') }}',
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "columns": [
                {data: 'id', name: 'id', searchable: false},
                {data: 'typename', name: 'typename'},
                 {data: 'category', name: 'category'},
                {data: 'description', name: 'description'},
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


   

