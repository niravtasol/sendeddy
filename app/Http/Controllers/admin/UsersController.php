<?php

namespace App\Http\Controllers\admin;
use App\Models\UserData;

// namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Models\Role;
use Auth;
use View;
use DataTables;
use DB;
use Hash;


class UsersController extends Controller
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
    public function index()
    {
        $users = $this->list_all();
        return View::make('admin.user.userlist', array('users' => $users ) );
    }

    public function list_all()
    {
        echo \Auth::user()->hasRole('admin');
        $users = UserData::where('status', 'active')->get();
        return $users;
    }

    public function delete_user( $id )
    {
        $isdelete = false;
        $userId = Auth::id();
        if( !empty($id) && $userId != $id ){
            $user = UserData::find($id);
            $user->status = 'inactive';
            $isdelete = $user->save();
        }
        
        if( $isdelete ){
            Session::flash('message', "User Successfully Deleted.");
            return Redirect::back();
            // return redirect()->route('/admin/users', ['message' => 'User Successfully Deleted.']);
        }
        else{
            Session::flash('message', "Error To Delete User.");
            return Redirect::back();
            // return redirect()->route('/admin/users', ['message' => 'Error To Delete User.']);
        }
    }

    public function adduser(){
        $roles = Role::lists('display_name','id');
        // return view('users.create',compact('roles'));
        return View::make('admin.user.adduser',compact('roles'));
    }

    public function getusers(){
        $users = User::where('status', 'active')->orderBy('id', 'asc')->select(['id', 'name', 'email', 'phone']);
        
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="'.url('/admin/edituser/'.$user->id).'" class="edit">
                            <button class="btn btn-sm btn-primary btn-flat">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </a>
                        <a href="'.url('/admin/deleteuser/'.$user->id).'"  class="trash">
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-trash"></i>
                            </button> 
                        </a>';
            })
            ->make(true);

        // return \DataTables::of(User::query())->make(true);
    }

    public function create(Request $request){

        request()->validate([
              
                'name'      => 'required|string|max:255',
                'lastname'  => 'required|string|max:255',
                'email'     => 'required|string|email|max:255|unique:users',
                'phone'     => 'required|integer',
                'address'   => 'required|string',
                'password' => 'required|string|min:6',

        ]);
        
        User::create([
            'name'              => $request->input('name'),
            'lastname'          => $request->input('lastname'),
            'email'             => $request->input('email'),
            'alternative_email' => $request->input('alternative_email'),
            'phone'             => $request->input('phone'),
            'address'           => $request->input('address'),
            'country'           => $request->input('country'),
            'state'             => $request->input('state'),
            'city'              => $request->input('city'),
            'password'          => bcrypt($request->input('password')),
            'status'            => 'active',
        ]);

        return redirect('/admin/users')->with('message','User Created successfully');
    }

    public function edituser( $id ){
        $userdata = User::where('id', $id)->get();
        return View::make('admin.user.edituser', array( 'user' => $userdata[0] ) );
    }
}
