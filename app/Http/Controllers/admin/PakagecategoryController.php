<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pakagecategory;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use DataTables;
use View;


class PakagecategoryController extends Controller
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
    

    public function pakagecategory()
    {

        $pakagecategorys = pakagecategory::all();

        return View::make('admin/pakagecategory/pakagecategory',array('pakagecategorys' => $pakagecategorys))->with('i');
    }


    public function addpakagecategory()
    {
        return view::make('admin/pakagecategory/addcategorypakage');
    }


     public function storepakagecategory(Request $request)

    {

        request()->validate([


            
              'name' => 'required',

              'description' => 'required',

              'ordring' => 'required',



        ]);

        pakagecategory::create($request->all());

        return redirect('/admin/pakagecategory')

                        ->with('success','pakage created successfully');

    

    }


    public function editpakagecategory($id)

    {
        
        $pakagecategory= pakagecategory::find($id);

    return view::make('admin/pakagecategory/editcategorypakage',compact('pakagecategory'), array( 'id' => $id ));
   
    }

     public function updatepakagecategory(Request $request)
     {

        request()->validate([
            'name' => 'required',

            'description' => 'required',

            'ordring' => 'required',

        ]);
        
        $id = $_REQUEST['id'];
        pakagecategory::find($id)->update($request->all());
        
        return redirect('/admin/pakagecategory')->with('success','pakage updated successfully');

  

    }

         public function destroypakagecategory($id)

    {

        pakagecategory::find($id)->delete();

        return redirect('/admin/pakagecategory')

                        ->with('success','vehicle deleted successfully');

    }



      public function getpakage()
      {
        $pakagecategorys= pakagecategory::select(['id','name','description'])->orderBy('ordring', 'asc');
        return Datatables::of($pakagecategorys)
            ->addColumn('action', function ($pakagecategory) {
                return '<a href="'.url('/admin/editpakagecategory/'.$pakagecategory->id).'" class="edit">
                            <button class="btn btn-sm btn-primary btn-flat">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="'.url('/admin/destroypakagecategory/'.$pakagecategory->id).'"  class="trash">
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>';
            })
            ->make(true);

        // return \DataTables::of(User::query())->make(true);
       }

}


