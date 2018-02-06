<?php

namespace App\Http\Controllers;


use App\Models\RolePermission;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Role;

use App\Models\Permission;

use DB;

use DataTables;

class RoleController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)
	{

        $roles = Role::orderBy('id','DESC')->get();

        return view('roles.index',array('roles' => $roles) );
    }

    /**
     * @return mixed
     */
    public function listAjax()
    {

        return DataTables::of(Role::get())
               ->addColumn('action', function ($role) {
            return '<a href="'.url('/admin/editrole/'.$role->id).'" class="edit">
                        <button class="btn btn-sm btn-primary btn-flat">
                            <i class="fa fa-pencil"></i>
                        </button>
                    </a>
                    <a href="'.url('/admin/deleterole/'.$role->id).'"  class="trash">
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

        return view('roles.create');

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
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
        ]);


        $role = new Role();

        $role->name = $request->input('name');

        $role->display_name = $request->input('display_name');

        $role->description = $request->input('description');

        $role->save();

        return redirect()->route('roles.index')

            ->with('message','Role created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $role = Role::find($id);

        $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")

            ->where("permission_role.role_id",$id)

            ->get();


        return view('roles.show',compact('role','rolePermissions'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {
        $role = Role::find($id);
        return view('roles.edit', array( 'role' =>  $role ) );
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
            'display_name' => 'required',
        ]);

        $id = $request->id;


        $role = Role::find($id);

        $role->display_name = $request->input('display_name');

        $role->description = $request->input('description');

        $role->save();

        return redirect()->route('roles.index')

            ->with('message','Role updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("roles")->where('id',$id)->delete();

        return redirect()->route('roles.index')

            ->with('message','Role deleted successfully');

    }
}
