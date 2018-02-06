<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\vehicle;
use View;
use DataTables;



class VehicleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function Vehicle()
    {

        $vehicles = vehicle::all();
        return View::make('admin/vehicle/vehicle', array('vehicles' => $vehicles))->with('i');
    }


    public function create()
    {
        return view::make('admin/vehicle/create');
    }


    public function add(Request $request)

    {
        request()->validate([
              
                'type'      => 'required',
                'make'      => 'required',
                'model'     => 'required',
                'year'      => 'required',
                'color'     => 'required',
                'reg_no'    => 'required',
                'status'    => 'required',

        ]);

        vehicle::create($request->all());
        return redirect('/admin/vehicle')->with('success','vehicle created successfully');

    }


 public function edit($id)

    {
        
        $vehicle= vehicle::find($id);

    return view::make('admin/vehicle/edit',compact('vehicle'),array( 'id' => $id ));
   
    }

     public function update(Request $request)
     {

        request()->validate([
            'type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'reg_no' => 'required',
            'status' => 'required',
        ]);

              $id = $_REQUEST['id'];
         // $driver_id = $_POST['driver_id'];1
          // $id = $request->id;
        vehicle::find($id)->update($request->all());

        return redirect('/admin/vehicle')->with('success','vehicle updated successfully');

  

    }


    public function destroy($id)

    {

        vehicle::find($id)->delete();

        return redirect()->route('vehicle')

                        ->with('success','vehicle deleted successfully');

    }


      public function getuservehicle()
      {
      
         $vehicles = vehicle::select(['id','driver_id','type','make','year','model'])
        ->orderBy('id', 'asc');
        return Datatables::of($vehicles)
            ->addColumn('action', function ($vehicles) 
            {
                return '<a href="'.url('/admin/edit/'.$vehicles->id).'" class="edit">
                            <button class="btn btn-sm btn-primary btn-flat">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="'.url('/admin/destroy/'.$vehicles->id).'"  class="trash">
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>';
            })
            ->make(true);

        // return \DataTables::of(User::query())->make(true);
    }

}


