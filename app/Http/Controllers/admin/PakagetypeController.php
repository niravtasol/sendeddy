<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pakagetype;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use DataTables;
use View;
use App\Models\pakagecategory;


class PakagetypeController extends Controller
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
    

    public function pakagetype()
    {

        $pakagetypes = pakagetype::all();

        return View::make('admin/pakagetype/pakagetype',array('pakagetypes' => $pakagetypes))->with('i');
    }

    public function get_category()
    {
        $category = pakagecategory::all();
        return $category;
    }


    public function addpakagetype()
    {
        $category = $this->get_category();
        return view::make('admin/pakagetype/addtypepakage', array('category' => $category));
    }


     public function storepakagetype(Request $request)

    {


        // var_dump(_REQUEST())
        request()->validate([


            
              'typename' => 'required',

               'category' => 'required',

              'description' => 'required',

             



        ]);

        pakagetype::create($request->all());

        return redirect('/admin/pakagetype')

                        ->with('success','pakage created successfully');

    

    }


    public function editpakagetype($id)

    {
         $category = $this->get_category();
        $pakagetype= pakagetype::find($id);

    return view::make('admin/pakagetype/edittypepakage',compact('pakagetype'), array( 'id' => $id ,'category' => $category));
   
    }

     public function updatepakagetype(Request $request)
     {

        request()->validate([

                'typename' => 'required',

                'category' => 'required',

                'description' => 'required',

        ]);
        
        $id = $_REQUEST['id'];
        pakagetype::find($id)->update($request->all());
        
        return redirect('/admin/pakagetype')->with('success','pakage updated successfully');

  

    }

         public function destroypakagetype($id)

    {

        pakagetype::find($id)->delete();

        return redirect('/admin/pakagetype')

                        ->with('success','vehicle deleted successfully');

    }



      public function getpakagetype()
      {
        $pakagetypes= pakagetype::select(['id','typename','category','description'])->orderBy('id', 'asc');
        return Datatables::of($pakagetypes)
            ->addColumn('action', function ($pakagetype) {
                return '<a href="'.url('/admin/editpakagetype/'.$pakagetype->id).'" class="edit">
                            <button class="btn btn-sm btn-primary btn-flat">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="'.url('/admin/destroypakagetype/'.$pakagetype->id).'"  class="trash">
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>';
            })
            ->make(true);

        // return \DataTables::of(User::query())->make(true);
       }

}


