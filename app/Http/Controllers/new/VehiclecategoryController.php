<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\vehiclecategory;
use Illuminate\Support\Facades\Input;

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

        return View::make('admin/vehiclecategory',array('vehiclecategorys' => $vehiclecategorys))->with('i');
    }


    public function createcategory()
    {
        return view::make('admin/createcategory');
    }


     public function store(Request $request)

    {

        request()->validate([


            
              'vehiclecategory' => 'required',



        ]);

        vehiclecategory::create($request->all());

        return redirect('vehiclecategory')

                        ->with('success','vehicle created successfully');

    

    }


    public function editcategory($id)

    {
        
        $vehiclecategory= vehiclecategory::find($id);

    return view::make('admin/editcategory',compact('vehiclecategory'), array( 'id' => $id ));
   
    }

     public function updatecategory(Request $request)
     {

        request()->validate([
            'vehiclecategory' => 'required',
        ]);
        
        $id = $_REQUEST['id'];
        vehiclecategory::find($id)->update($request->all());
        
        return redirect('vehiclecategory')->with('success','vehicle updated successfully');

  

    }

         public function destroycategory($id)

    {

        vehiclecategory::find($id)->delete();

        return redirect()->route('vehiclecategory')

                        ->with('success','vehicle deleted successfully');

    }

}


