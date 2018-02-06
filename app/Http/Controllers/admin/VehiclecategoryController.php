<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehiclecategory;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use DataTables;
use View;

class VehiclecategoryController extends Controller
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
    

    public function vehiclecategory()
    {

        $vehiclecategorys = vehiclecategory::all();

        return View::make('admin/vehiclecategory/vehiclecategory',array('vehiclecategorys' => $vehiclecategorys))->with('i');
    }


    public function createcategory()
    {
        return view::make('admin/vehiclecategory/createcategory');
    }


     public function store(Request $request)

    {

        request()->validate([


            
              'vehiclecategory' => 'required',



        ]);

        vehiclecategory::create($request->all());

        return redirect('/admin/vehiclecategory')

                        ->with('success','vehicle created successfully');

    

    }


    public function editcategory($id)

    {
        
        $vehiclecategory= vehiclecategory::find($id);

    return view::make('admin/vehiclecategory/editcategory',compact('vehiclecategory'), array( 'id' => $id ));
   
    }

     public function updatecategory(Request $request)
     {

        request()->validate([
            'vehiclecategory' => 'required',
        ]);
        
        $id = $_REQUEST['id'];
        vehiclecategory::find($id)->update($request->all());
        
        return redirect('/admin/vehiclecategory')->with('success','vehicle updated successfully');

  

    }

         public function destroycategory($id)

    {

        vehiclecategory::find($id)->delete();

        return redirect('/admin/vehiclecategory')

                        ->with('success','vehicle deleted successfully');

    }



      public function getusers()
      {
        $vehiclecategorys = vehiclecategory::select(['id','vehiclecategory'])->orderBy('id', 'asc');
        return Datatables::of($vehiclecategorys)
            ->addColumn('action', function ($vehiclecategory) {
                return '<a href="'.url('/admin/editcategory/'.$vehiclecategory->id).'" class="edit">
                            <button class="btn btn-sm btn-primary btn-flat">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="'.url('/admin/destroycategory/'.$vehiclecategory->id).'"  class="trash">
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>';
            })
            ->make(true);

        // return \DataTables::of(User::query())->make(true);
    }

}


