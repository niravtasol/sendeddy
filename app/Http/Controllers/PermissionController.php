<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Role;

use App\Models\Permission;

use DB;

use DataTables;

class PermissionController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request){

        return view('permission.index');
    }


    /**
     * @return mixed
     */
    public function listAjax()
    {

        return DataTables::of(Permission::get())
               ->addColumn('action', function ($permission) {
            return '<a href="'.url('/admin/editpermission/'.$permission->id).'" class="edit">
                        <button class="btn btn-sm btn-primary btn-flat">
                            <i class="fa fa-pencil"></i>
                        </button>
                    </a>
                    <a href="'.url('/admin/deletepermission/'.$permission->id).'"  class="trash">
                        <button class="btn btn-sm btn-danger btn-flat">
                            <i class="fa fa-trash"></i>
                        </button> 
                    </a>';
                })
               ->make(true);
    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('permission.create');
    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required|unique:permissions,name',

        ]);


        $permission = new Permission();
        $permission->name = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        // $permission->module = $request->input('module');
        $permission->save();
        return redirect()->route('permission.index')->with('message','Permission created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $permission = Permission::find($id);
        return view('permission.show',compact('permission'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $permission = Permission::find($id);
        return view('permission.edit',compact('permission'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $id = $request->id;
        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        // $permission->module = $request->input('module');
        $permission->save();

        return redirect()->route('permission.index')->with('message','Permission updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */
    public function destroy($id)
    {
        DB::table("permissions")->where('id',$id)->delete();
        return redirect()->route('permission.index')->with('message','Permission deleted successfully');

    }
}
